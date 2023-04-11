<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class TenantUser extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'present_address',
        'permanent_address',
        'national_id',
        'bank_ac',
        'department',
        'dob',
        'gender',
        'email',
        'status',
        'password',
    ];
}
