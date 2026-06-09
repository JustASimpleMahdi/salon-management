<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['name', 'description'])]
class Service extends Model
{
    public function personnels(): BelongsToMany
    {
        return $this->belongsToMany(Personnel::class);
    }
}
