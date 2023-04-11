<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Authenticatable
{
    use HasFactory;

    protected $guard = "super_admin";

    protected $fillable = [
        'name',
        'phone',
        'email',
        'status',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}