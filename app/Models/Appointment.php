<?php

namespace App\Models;

use App\Casts\JalaliCast;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Morilog\Jalali\Jalalian;

#[Fillable('start', 'end')]
class Appointment extends Model
{
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function personnels(): BelongsToMany
    {
        return $this->belongsToMany(Personnel::class);
    }

    public function personnelsWithReserved(): BelongsToMany
    {
        return $this->belongsToMany(Personnel::class)
            ->select('personnels.*')
            ->selectRaw(
                'EXISTS (
                SELECT 1 FROM reservations
                WHERE reservations.personnel_id = personnels.id
                  AND reservations.appointment_id = appointment_personnel.appointment_id
            ) as reserved'
            );
    }

    #[Scope]
    protected function future(Builder $query): void
    {
        $query->where('start', '>', Carbon::now());
    }

    #[Scope]
    protected function orderByTime(Builder $query): void
    {
        $query->orderBy('start', 'asc');
    }

    #[Scope]
    protected function byDate(Builder $query, Jalalian|Carbon $date): void
    {
        if ($date instanceof Jalalian) {
            $date = $date->toCarbon();
        }
        $query->whereDate('start', $date);
    }

    #[Scope]
    protected function today(Builder $query): void
    {
        $query->whereDate('start', now());
    }

    protected function date(): Attribute
    {
        return Attribute::get(fn() => $this->start->format('Y/m/d'));
    }

    protected function casts(): array
    {
        return [
            'start' => JalaliCast::class,
            'end' => JalaliCast::class,
        ];
    }
}
