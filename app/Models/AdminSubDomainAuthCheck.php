<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSubDomainAuthCheck extends Model
{
    use HasFactory;
   protected $fillable = ['admin_id','subdomain_id','token'];
}
