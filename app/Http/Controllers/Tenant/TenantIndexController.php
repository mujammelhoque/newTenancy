<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\TenantUser;
use App\Models\AdminSubDomainAuthCheck;

class TenantIndexController extends Controller
{
    // *********************Redirect to Tenant Landing page************
    public function homeIndex(){
        return view('tenant.index');
    }

    // *******************Redirect to Admin login form*****************
    public function admin_login_form(){
        return view('tenant.admin.auth.login');
    }

    // *******************Admin login *****************

    public function admin_login(Request $request){

 $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('admin')->attempt($request->only(['email','password']), $request->get('remember'))){
            if (Session::has('AdminSubDomainAuthCheck'))
        {
            Session::forget('AdminSubDomainAuthCheck');
            
            Session::put('AdminSubDomainAuthCheck',  csrf_token());

            AdminSubDomainAuthCheck::updateOrCreate([
                'admin_id' => Auth::guard('admin')->id(),
            ], [

                'token' => session()->get('AdminSubDomainAuthCheck'),

            ]);
            return redirect()->route('tenant.admin.dashboard');

        }else{
            Session::put('AdminSubDomainAuthCheck',  csrf_token());

            AdminSubDomainAuthCheck::updateOrCreate([
                'admin_id' => Auth::guard('admin')->id(),
            ], [

                'token' => session()->get('AdminSubDomainAuthCheck'),

            ]);
            return redirect()->route('tenant.admin.dashboard');


        }
        }else {
            return back();
        }

     }
    // *******************Redirect to Tenant Super Admin login form****************

        public function super_admin_login_form(){
            return view('tenant.superadmin.auth.login');

        }

    // ******************* Tenant Super Admin login ****************


    public function super_admin_login(Request $request){

         $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('super_admin')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->route('tenant.superadmin.dashboard');
        }else {
            return back();
        }

        }
    // **********************Tenant User Register form*****************************
    public function user_register_form(){
            return view('tenant.user.auth.register');
    }
    // **********************Tenant User Register *****************************

    public function user_register(Request $request){
        // dd($request->all());

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.TenantUser::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

     TenantUser::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'national_id' => $request->national_id,
            'bank_ac' => $request->bank_ac,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'email' => $request->email,
            'status' => $request->status,
            'password' => Hash::make($request->password),
        ]);
         return redirect()->route('tenant.user.login.form');
    }

    // ************************Tenant User login form*******************************
    public function user_login_form(){
        return view('tenant.user.auth.login');
    }
    // ***********************Tenant User Login*******************
    public function user_login(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('tenant_user')->attempt($request->only(['email','password']), $request->get('remember'))){
            return view('tenant.user.dashboard');
        }else {
            return back();
        }

    }


}
