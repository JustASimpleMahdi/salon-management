<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }

    public function personnel(): BelongsTo
    {
        return $this->belongsTo(Personnel::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    #[Scope]
    protected function past(Builder $query): void
    {
        $query->whereHas('appointment', function (Builder $query) {
            $query->where('end', '<', now());
        });
    }

    #[Scope]
    protected function current(Builder $query): void
    {
        $query->whereHas('appointment', function (Builder $query) {
            $query->where('end', '>=', now());
        });
    }

    protected function isPast(): Attribute
    {
        return Attribute::get(fn() => $this->appointment->end->isPast());
    }
}
