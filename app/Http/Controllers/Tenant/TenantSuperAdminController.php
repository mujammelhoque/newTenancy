<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantSuperAdminController extends Controller
{
    public function index(){
        return view('tenant.superadmin.index');
    }
}
