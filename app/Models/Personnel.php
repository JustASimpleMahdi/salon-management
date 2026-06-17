<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['firstname', 'lastname'])]
class Personnel extends Model
{
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
    public function appointments(): BelongsToMany
    {
        return $this->belongsToMany(Appointment::class);
    }
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }

    protected function fullname(): Attribute
    {
        return Attribute::get(fn() => $this->firstname . ' ' . $this->lastname);
    }

    protected function casts(): array
    {
        return [
            'reserved' => 'boolean'
        ];
    }
}
