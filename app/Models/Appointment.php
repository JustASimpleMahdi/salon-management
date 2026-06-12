<?php

namespace App\Models;

use App\Casts\JalaliCast;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Morilog\Jalali\Jalalian;

#[Fillable('start', 'end')]
class Appointment extends Model
{
    public function personnels(): BelongsToMany
    {
        return $this->belongsToMany(Personnel::class);
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

    protected function casts(): array
    {
        return [
            'start' => JalaliCast::class,
            'end' => JalaliCast::class,
        ];
    }
}
