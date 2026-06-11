<?php

namespace App\Models;

use App\Casts\JalaliCast;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable('start', 'end')]
class Appointment extends Model
{
    public function personnels(): BelongsToMany
    {
        return $this->belongsToMany(Personnel::class);
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
