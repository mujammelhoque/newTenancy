<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TenantEmployee;
use App\Models\CurrentLoan;
use App\Models\LoanAddHistory;
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
        $salary->house_rent_unit       = $request->house_rent_unit;


        $salary->medical               = $request->medical;
        $salary->medical_unit              = $request->medical_unit;


        $salary->transportation        = $request->transportation;
        $salary->transportation_unit   = $request->transportation_unit;

        $salary->mobile                = $request->mobile;
        $salary->mobile_unit           = $request->mobile_unit;


        $salary->income_tax            = $request->income_tax;
        $salary->income_tax_unit       = $request->income_tax_unit;

        $salary->absence               = $request->absence;
        $salary->advance               = $request->advance;
        $salary->loan                  = $request->loan;
        $salary->save();
    //     $currentloan =[];
    // if (CurrentLoan::where(['employee_id',$request->tenant_employee_id])->exists()) {
    // }
        $currentloan = CurrentLoan::where('employee_id',$request->tenant_employee_id)->first();
        $updateloan =  $currentloan->current_loan??0+$request->loan;
        CurrentLoan::updateOrCreate([
            'employee_id'       =>$request->tenant_employee_id],
            [            'current_loan'      =>  $updateloan
            ]
        );

        LoanAddHistory::create([
            'employee_id'       =>      $request->tenant_employee_id,
            'add_loan'        =>      $request->loan,

        ]);

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
                'tenant_employee_id'    => $request->tenant_employee_id,
                'basic'                 => $request->basic,

                'house_rent'            => $request->house_rent,
                'house_rent_unit'       => $request->house_rent_unit,

                'medical'               => $request->medical,
                'medical_unit'          => $request->medical_unit,

                'transportation'        => $request->transportation,
                'transportation_unit'   => $request->transportation_unit,

                'mobile'                => $request->mobile,
                'mobile_unit'           => $request->mobile_unit,

                'income_tax'            => $request->income_tax,
                'income_tax_unit'       => $request->income_tax_unit,

                'absence'               => $request->absence,
                'advance'               => $request->advance,
                'loan'                  => $request->loan,
                                            ];
            TenantEarningDeduction::where('id',$request->tenant_employee_id)->update($update);
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
