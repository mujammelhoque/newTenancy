
@extends('tenant.admin.payslip.layouts.exportmaster')
@section('content')
    <!-- Page Wrapper -->
    <div class="">
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid" id="app">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col" style="margin-left: -222px;">
                        <h3 class="page-title">Payslip</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('form/salary/page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Payslip</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-white">CSV</button>
                            <button class="btn btn-white"><a href="{{ route('pdf/payslip',$employees->id) }}" target="_blank">PDF</a></button>
                            <button class="btn btn-white"><i class="fa fa-print fa-lg"></i><a href="" @click.prevent="printme" target="_blank"> Print</a></button>
                        </div>
                    </div>
                </div>

            <div class="row" style="margin-left: -240px;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="payslip-title">Payslip for the month of {{ \Carbon\Carbon::now()->format('M') }}   {{ \Carbon\Carbon::now()->year }}  </h4>
                            <div class="row">
                                <div class="col-sm-6 m-b-20">
                                    {{-- @if(!empty($employees->avatar))
                                    <img src="{{ URL::to('/assets/images/'. $employees->avatar) }}" class="inv-logo" alt="{{ $employees->name }}">
                                    @endif --}}
                                    <ul class="list-unstyled mb-0">
                                        <li>{{ $employees->name }}</li>
                                        <li>{{ $employees->address }}</li>
                                        {{-- <li>{{ $employees->country }}</li> --}}
                                    </ul>
                                </div>
                                <div class="col-sm-6 m-b-20">
                                    <div class="invoice-details">
                                        <h3 class="text-uppercase">Payslip #49029</h3>
                                        <ul class="list-unstyled">
                                            <li>Salary Month: <span>{{ \Carbon\Carbon::now()->format('M') }}  , {{ \Carbon\Carbon::now()->year }}  </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 m-b-20">
                                    <ul class="list-unstyled">
                                        <li><h5 class="mb-0"><strong>{{ $employees->name }}</strong></h5></li>
                                        {{-- <li><span>{{ $employees->position }}</span></li> --}}
                                        <li>Employee ID: {{ $employees->user_id }}</li>
                                        <li>Joining Date: {{ $employees->joining_date }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <h4 class="m-b-10"><strong>Earnings</strong></h4>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <?php
                                                    $a =  (int)$employees->earning_deduction->basic;
                                                    $b =  (int)$employees->earning_deduction->house_rent;
                                                    $c =  (int)$employees->earning_deduction->medical;
                                                    $e =  (int)$employees->earning_deduction->transportation;
                                                    $f =  (int)$employees->earning_deduction->mobile;

                                                    $Total_Earnings   = $a + $b + $c + $e+$f;
                                                ?>
                                                <tr>
                                                    <td><strong>Basic Salary</strong> <span class="float-right">{{ $employees->earning_deduction->basic }}tk</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>House Rent </strong> <span class="float-right">{{ $employees->earning_deduction->house_rent }}tk</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Medical Allowance</strong> <span class="float-right">{{ $employees->earning_deduction->medical }}tk</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Mobile bill</strong> <span class="float-right">{{ $employees->earning_deduction->mobile}}tk</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Total Earnings</strong> <span class="float-right"><strong><?php echo number_format($Total_Earnings,2) ?>tk</strong></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <h4 class="m-b-10"><strong>Deductions</strong></h4>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <?php
                                                $tax_amount = $employees->earning_deduction->basic *$employees->earning_deduction->income_tax/100;

                                                $absence_amount = $employees->earning_deduction->basic /30 * $employees->earning_deduction->absence;

                                                    $a =  (int)$tax_amount ;
                                                    $b =  (int)$absence_amount;
                                                    $c =  (int)$employees->earning_deduction->advance;
                                                    $Total_Deductions   = $a + $b + $c;
                                                ?>
                                                <tr>
                                                    <td><strong>Tax Deducted </strong> <span class="float-right">{{ $employees->earning_deduction->income_tax}}%</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Provident Fund</strong> <span class="float-right">00.00</span></td>
                                                </tr>
                                                {{-- <tr>
                                                    <td><strong>ESI</strong> <span class="float-right">${{ $employees->esi }}</span></td>
                                                </tr> --}}
                                                <tr>
                                                    <td><strong>Loan</strong> <span class="float-right">{{ $employees->earning_deduction->loan }}tk</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Total Deductions</strong> <span class="float-right"><strong><?php echo number_format($Total_Deductions,2);?>tk</strong></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12" >
                                    <p><strong>Total Amount Payable to your bank Account: BDT {{ number_format($Total_Earnings-$Total_Deductions,2 )}}</strong>
                                         {{-- (Fifty nine thousand six hundred and ninety eight only.) --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
    </div>
@endsection
