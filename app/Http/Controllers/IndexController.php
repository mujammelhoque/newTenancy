<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // ********************** Super Admin Login Form ******************************

    public function super_admin_login_form(){
        return view('super_admin.login');

    }

    // ********************** Super Admin Login ******************************
    public function super_admin_login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('super_admin')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->route('super.admin.dashboard');
        }else {
            return back();
        }
    }
}
