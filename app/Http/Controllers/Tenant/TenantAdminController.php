<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Admin;
use App\Models\AdminSubDomainAuthCheck;

class TenantAdminController extends Controller
{
   public function index(){
//     $adminCheck = AdminSubDomainAuthCheck::where('admin_id',Auth::guard('admin')->id())->first();
//     if (isset($adminCheck->token)) {

//     if ($adminCheck->token == session()->get('AdminSubDomainAuthCheck')) {
//         dd(session()->get('AdminSubDomainAuthCheck'));
//         return view('tenant.admin.payslip.dashboard.dashboard');
//     }else{
//         return 'You are not Authenticate user';
//     }
// }else{
//     return 'You are not Authenticate user';

// }
        return view('tenant.admin.payslip.dashboard.dashboard');


   }
}
