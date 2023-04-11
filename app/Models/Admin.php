<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'org_name',
        'org_id',
        'org_domain',
        'tenant_url',
        'email',
        'phone',
        'status',
        'password',
    ];

}
