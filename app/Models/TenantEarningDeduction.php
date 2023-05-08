<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenantEarningDeduction extends Model
{
    use HasFactory;
    protected $fillable = ['tenant_employee_id','gross_salary','basic','house_rent','house_rent_unit','medical','medical_unit','transportation','transportation_unit','mobile','mobile_unit','income_tax','income_tax_unit','absence','loan'];
    // public function employee(): BelongsTo

    // {

    //     return $this->belongsTo(Employee::Class,);

    // }
}
