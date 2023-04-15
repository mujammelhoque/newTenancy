<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TenantEmployee;
// use App\Models\Deduction;
// use App\Models\Earning;
use App\Models\TenantEarningDeduction;

use Illuminate\Support\Facades\DB;

class PayrollController extends Controller
{
    //
    public function salary()
    {

        $employees = TenantEmployee::get();
        return view('tenant.admin.payslip.payroll.employeesalary',compact('employees'));
    }

    // save record
    public function saveRecord(Request $request)
    {
        // dd($request->all());
    $request->validate([
        'tenant_employee_id'         => 'required',        'basic' => 'required|string|max:255',
    ]);


        $salary = TenantEarningDeduction::updateOrCreate(['tenant_employee_id' => $request->tenant_employee_id]);
        $salary->tenant_employee_id    = $request->tenant_employee_id;
        $salary->basic                 = $request->basic;
        $salary->house_rent            = $request->house_rent;
        $salary->medical               = $request->medical;
        $salary->transportation        = $request->transportation;
        $salary->mobile                = $request->mobile;

        $salary->income_tax            = $request->income_tax;
        $salary->absence               = $request->absence;
        $salary->advance               = $request->advance;
        $salary->loan                  = $request->loan;
        $salary->save();


        return back();




    }

    // salary view detail
    public function salaryView($id)
    {
        $employees =TenantEmployee::findOrFail($id) ;
        if(!empty($employees)) {
            return view('tenant.admin.payslip.payroll.salaryview',compact('employees'));
        } else {
            // Toastr::warning('Please update information user :)','Warning');
            // return redirect()->route('profile_user');
             return redirect()->back();
        }

    }

    // update record
    public function updateRecord(Request $request)
    {
            $update = [
                'employee_id'           => $request->employee_id,
                'basic'                 => $request->basic,
                'house_rent'            => $request->house_rent,
                'medical'               => $request->medical,
                'transportation'        => $request->transportation,
                'mobile'                => $request->mobile,
                'income_tax'            => $request->income_tax,
                'absence'               => $request->absence,
                'advance'               => $request->advance,
                'loan'                  => $request->loan,
                                            ];
            TenantEarningDeduction::where('id',$request->employee_id)->update($update);
            return redirect()->back();

        // DB::beginTransaction();
        // try{
        //     $update = [

        //         'id'      => $request->id,
        //         'name'    => $request->name,
        //         'salary'  => $request->salary,
        //         'basic'   => $request->basic,
        //         'da'      => $request->da,
        //         'hra'     => $request->hra,
        //         'conveyance' => $request->conveyance,
        //         'allowance'  => $request->allowance,
        //         'medical_allowance'  => $request->medical_allowance,
        //         'tds'  => $request->tds,
        //         'esi'  => $request->esi,
        //         'pf'   => $request->pf,
        //         'leave'     => $request->leave,
        //         'prof_tax'  => $request->prof_tax,
        //         'labour_welfare'  => $request->labour_welfare,
        //     ];


        //     StaffSalary::where('id',$request->id)->update($update);
        //     DB::commit();
        //     Toastr::success('Salary updated successfully :)','Success');
        //     return redirect()->back();

        // }catch(\Exception $e){
        //     DB::rollback();
        //     Toastr::error('Salary update fail :)','Error');
        //     return redirect()->back();
        // }
    }

    // delete record
    public function deleteRecord(Request $request)
    {
        // DB::beginTransaction();
        // try {

        //     StaffSalary::destroy($request->id);

        //     DB::commit();
        //     Toastr::success('Salary deleted successfully :)','Success');
        //     return redirect()->back();

        // } catch(\Exception $e) {
        //     DB::rollback();
        //     Toastr::error('Salary deleted fail :)','Error');
        //     return redirect()->back();
        // }
    }

    // payroll Items
    public function payrollItems()
    {
        return view('payroll.payrollitems');
    }
}
