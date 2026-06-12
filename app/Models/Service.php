<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'description'])]
class Service extends Model
{

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
    public function personnels(): BelongsToMany
    {
        return $this->belongsToMany(Personnel::class);
    }

    #[Scope]
    protected function popular(Builder $query): void
    {
        /* TODO: Fill this part */
    }
}
