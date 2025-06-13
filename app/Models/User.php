<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password'];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'admin' => 'boolean',
    ];

    // Implementasi JWTSubject
    public function getJWTIdentifier()
    {
        return $this->getKey(); // biasanya primary key 'id'
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}

