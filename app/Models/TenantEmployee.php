<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TenantEmployee extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_user_id',
        'name',
        'phone',
        'address',
        'email',
        'gender',
        'dob',
        'joining_date',
        'designation',
        'department_id',
        'national_id',
        'bank_account'
    ];
    public function earning_deduction(): HasOne
    {
        return $this->hasOne(TenantEarningDeduction::class);
        }

}
