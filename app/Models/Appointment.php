<?php

namespace App\Models;

use App\Casts\JalaliCast;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable('start', 'end')]
class Appointment extends Model
{
    public function personnels(): BelongsToMany
    {
        return $this->belongsToMany(Personnel::class);
    }

    protected function casts(): array
    {
        return [
            'start' => JalaliCast::class,
            'end' => JalaliCast::class,
        ];
    }
}
