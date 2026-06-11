<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['firstname',
'lastname',
'username',
'password',
'national_code',
'phone',
])]
#[Hidden(['password', 'remember_token'])]
class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract
{
    use HasFactory, Notifiable;
    use Authorizable, Authenticatable;

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function redirectRoute(): string
    {
        if ($this->is_manager) return route('manager.index');
        return route('index');
    }
}
