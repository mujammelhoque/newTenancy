<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanMinusHistory extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id','admin_id','minus_loan','duration'];

}
