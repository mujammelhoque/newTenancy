<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentLoan extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id','admin_id','current_loan','duration'];

}
