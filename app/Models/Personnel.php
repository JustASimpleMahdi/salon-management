<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['firstname', 'lastname'])]
class Personnel extends Model
{
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }

    protected function fullname(): Attribute
    {
        return Attribute::get(fn() => $this->firstname . ' ' . $this->lastname);
    }
}
