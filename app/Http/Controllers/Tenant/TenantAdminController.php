<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;

class TenantAdminController extends Controller
{
   public function index(){
    return view('tenant.admin.payslip.dashboard.dashboard');
   }
}
