<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Tenant;
use App\Models\Admin;
use App\Models\SuperAdmin;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:super_admin')->except('logout');
    }


    // ********************* Dashboard*******************************
    public function dashboard(){
            $tenan_request_users = User::get();
            return view('super_admin.dashboard.dashboard',compact('tenan_request_users'));
        }

    // ******************tenant accept***********************

    public function tenant_accept(Request $request){
        // dd( Auth::guard('super_admin')->user()->email);
        $user = User::find($request->id);
        $user->status = 1;
        $user->org_id =$request->org_id ;

        $user->update();

        $tenant1 = Tenant::create([
            'id' => $user->org_id,
            // 'tenancy_db_username' => 'phpmyadmin',
            // 'tenancy_db_password' => 'aloitConsultants123456',
        ]);
     $tenant1->domains()->create(['domain' => $user->org_id.'.localhost']);

        session()->put('adminEmail',$user->email);
        // session()->put('adminName',$user->name);
        session()->put('adminOrgID',$user->org_id);
        session()->put('adminOrgName',$user->org_name);
        // session()->put('adminOrgDomain',$user->org_domain);
        session()->put('adminTenantUrl',$user->org_id.'.localhost');

        session()->put('adminPhone',$user->phone);
        session()->put('adminPassword',$user->password);

        Tenant::where('id',$user->org_id)->get()->runForEach(function () {
            Admin::updateOrCreate([
                'email' => session()->get('adminEmail'),
            ], [

                'org_name' => session()->get('adminOrgName'),
                'org_id' => session()->get('adminOrgID'),
                'tenant_url' => session()->get('adminTenantUrl'),

                'phone' => session()->get('adminPhone'),
                'password' => session()->get('adminPassword'),

            ]);

            session()->forget('adminEmail');
            session()->forget('adminOrgID');
            session()->forget('adminOrgName');
            session()->forget('adminPhone');
            session()->forget('adminPassword');
            session()->forget('adminTenantUrl');

            // session()->forget('adminOrgDomain');


        SuperAdmin::updateOrCreate([
            'email' => Auth::guard('super_admin')->user()->email
        ], [
            'name' => Auth::guard('super_admin')->user()->name,
            'phone' =>  Auth::guard('super_admin')->user()->phone,
            'password' =>  Auth::guard('super_admin')->user()->password,
        ]);
    });

       return back()->with('success','Status has been changed successfully!');


    }


    // ******************tenant reject***********************

    public function tenant_reject(Request $request){

    }

}
