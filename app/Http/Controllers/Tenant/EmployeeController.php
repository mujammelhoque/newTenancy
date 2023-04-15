<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TenantUser;
use App\Models\TenantEmployee;


class EmployeeController extends Controller
{
    public function cardAllEmployee(Request $request)
    {
        // $users = DB::table('users')
        //             ->join('employees', 'users.user_id', '=', 'employees.employee_id')
        //             ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
        //             ->get();
        // $userList = DB::table('users')->get();
        // $permission_lists = DB::table('permission_lists')->get();
        $tenantusers = TenantUser::get();
        return view('tenant.admin.payslip.form.allemployeecard',compact('tenantusers'));
    }
    // all employee list
    public function listAllEmployee()
    {
        // $users = DB::table('users')
        //             ->join('employees', 'users.user_id', '=', 'employees.employee_id')
        //             ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
        //             ->get();
        // $userList = DB::table('users')->get();
        // $permission_lists = DB::table('permission_lists')->get();
        return view('form.employeelist');
    }

    // save data employee
    public function saveRecord(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|email',
            'dob'   => 'required|string|max:255',
            'gender'      => 'required|string|max:255',
            'department_id' => 'required|string|max:255',
            'phone'     => 'required|string|max:255',
        ]);
        $employee = new TenantEmployee;
                $employee->tenant_user_id        = $request->tenant_user_id;
                $employee->name                 = $request->name;
                $employee->email                = $request->email;
                $employee->phone                = $request->phone;
                $employee->address              = $request->address;
                // $employee->salary_for           = $request->salary_for;
                $employee->joining_date         = $request->joining_date;
                $employee->designation          = $request->designation;
                $employee->dob                  = $request->dob;
                $employee->gender               = $request->gender;
                $employee->department_id        = $request->department_id;
                $employee->national_id          = $request->national_id;
                $employee->bank_account         = $request->bank_account;

                $employee->save();

return back();
        // Employee::create($request->all());

        // DB::beginTransaction();
        // try{

        //     $employees = Employee::where('email', '=',$request->email)->first();
        //     if ($employees === null)
        //     {

        //         $employee = new Employee;
        //         $employee->name         = $request->name;
        //         $employee->email        = $request->email;
        //         $employee->birth_date   = $request->birthDate;
        //         $employee->gender       = $request->gender;
        //         $employee->employee_id  = $request->employee_id;
        //         $employee->company      = $request->company;
        //         $employee->save();

        //         for($i=0;$i<count($request->id_count);$i++)
        //         {
        //             $module_permissions = [
        //                 'employee_id' => $request->employee_id,
        //                 'module_permission' => $request->permission[$i],
        //                 'id_count'          => $request->id_count[$i],
        //                 'read'              => $request->read[$i],
        //                 'write'             => $request->write[$i],
        //                 'create'            => $request->create[$i],
        //                 'delete'            => $request->delete[$i],
        //                 'import'            => $request->import[$i],
        //                 'export'            => $request->export[$i],
        //             ];
        //             DB::table('module_permissions')->insert($module_permissions);
        //         }

        //         DB::commit();
        //         Toastr::success('Add new employee successfully :)','Success');
        //         return redirect()->route('all/employee/card');
        //     } else {
        //         DB::rollback();
        //         Toastr::error('Add new employee exits :)','Error');
        //         return redirect()->back();
        //     }
        // }catch(\Exception $e){
        //     DB::rollback();
        //     Toastr::error('Add new employee fail :)','Error');
        //     return redirect()->back();
        // }
    }
}
