<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanAddHistory extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id','admin_id','add_loan','duration'];

}
