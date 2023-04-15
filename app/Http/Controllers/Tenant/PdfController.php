<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function payslip_pdf($id){
        // $data = Employee::get();
        // share data to view
        // view()->share('employee',$data);
        // $pdf = PDF::loadView('pdf_view', $data);
        $pdf = PDF::loadView('tenant.admin.payslip.pdf/payslip_pdf');

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');    }
}
