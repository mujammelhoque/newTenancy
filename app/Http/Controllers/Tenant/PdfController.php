<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TenantEmployee;
use App\Models\CurrentLoan;
use PDF;

class PdfController extends Controller
{
    public function payslip_pdf($id){

        $employees =TenantEmployee::find($id) ;
        // return view('tenant.admin.payslip.pdf.aloit_payslip',compact('employees'));
        $pdf = PDF::loadView('tenant.admin.payslip.pdf.aloit_payslip',compact('employees'));
        $loans = CurrentLoan::where('employee_id',$id)->first();
        $loans->current_loan = 0;
        $loans->update();
        return $pdf->download('pdf_file.pdf');    }
}
