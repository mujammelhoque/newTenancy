
@extends('tenant.admin.payslip.layouts.master')

@section('content')
    <!-- Page Wrapper -->
    <div class="container">
    <div class="page-wrapper " style="margin-left:322px;">
        <!-- Page Content -->
        <div class="content container-fluid" id="">
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
                                        {{-- <li>{{ $employees->name }}</li>
                                        <li>{{ $employees->address }}</li> --}}
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
                                        {{-- ********************House Rent Count***************** --}}

                                        @if ($employees->earning_deduction->house_rent_unit == 'bdt')
                                        @php
                                            $houseRent =$employees->earning_deduction->house_rent
                                        @endphp
                                        @endif

                                        @if ($employees->earning_deduction->house_rent_unit == 'persent')
                                        @php
                                            $houseRent =$employees->earning_deduction->basic * $employees->earning_deduction->house_rent/100
                                        @endphp
                                        @endif



                                         {{-- ********************Medical Allowance Count***************** --}}

                                         @if ($employees->earning_deduction->medical_unit == 'bdt')
                                         @php
                                             $medicalAllowance =$employees->earning_deduction->medical
                                         @endphp
                                         @endif

                                         @if ($employees->earning_deduction->medical_unit == 'persent')
                                         @php
                                             $medicalAllowance =$employees->earning_deduction->basic * $employees->earning_deduction->medical/100
                                         @endphp
                                         @endif

                                             {{-- ********************Mobile Allowance Count***************** --}}

                                             @if ($employees->earning_deduction->mobile_unit == 'bdt')
                                             @php
                                                 $mobileAllowance =$employees->earning_deduction->mobile
                                             @endphp
                                             @endif

                                             @if ($employees->earning_deduction->mobile_unit == 'persent')
                                             @php
                                                 $mobileAllowance =$employees->earning_deduction->basic * $employees->earning_deduction->mobile/100
                                             @endphp
                                             @endif
                                                {{-- ********************Transportation Count***************** --}}

                                                @if ($employees->earning_deduction->transportation_unit == 'bdt')
                                                @php
                                                    $transportationAllow =$employees->earning_deduction->transportation
                                                @endphp
                                                @endif

                                                @if ($employees->earning_deduction->transportation_unit == 'persent')
                                                @php
                                                    $transportationAllow =$employees->earning_deduction->basic * $employees->earning_deduction->transportation/100
                                                @endphp
                                                @endif
                                                {{-- total earning count --}}
                                                @php
                                                    $Total_Earnings = $employees->earning_deduction->basic + $houseRent +$medicalAllowance+ $mobileAllowance+ $transportationAllow
                                                @endphp

                                        <h4 class="m-b-10"><strong>Earnings</strong></h4>
                                        <table class="table table-bordered">
                                            <tbody>



                                                <tr>
                                                    <td><strong>Basic Salary</strong> <span class="float-right">{{ $employees->earning_deduction->basic }}tk</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>House Rent </strong> <span class="float-right">
                                                        {{ $employees->earning_deduction->house_rent }}
                                                        @if ($employees->earning_deduction->house_rent_unit == 'bdt')
                                                        BDT
                                                        @endif
                                                        @if ($employees->earning_deduction->house_rent_unit == 'persent')
                                                        %
                                                        @endif
                                                        @if ($employees->earning_deduction->house_rent_unit == 'dolor')
                                                        $
                                                        @endif
                                                     </span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Medical Allowance</strong> <span class="float-right">
                                                        {{ $employees->earning_deduction->medical }}
                                                        @if ($employees->earning_deduction->medical_unit == 'bdt')
                                                        BDT
                                                        @endif
                                                        @if ($employees->earning_deduction->medical_unit == 'persent')
                                                        %
                                                        @endif
                                                        @if ($employees->earning_deduction->medical_unit == 'dolor')
                                                        $
                                                        @endif
                                                    </span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Mobile bill</strong> <span class="float-right">
                                                        {{ $employees->earning_deduction->mobile}}

                                                        @if ($employees->earning_deduction->mobile_unit == 'bdt')
                                                        BDT
                                                        @endif
                                                        @if ($employees->earning_deduction->mobile_unit == 'persent')
                                                        %
                                                        @endif
                                                        @if ($employees->earning_deduction->mobile_unit == 'dolor')
                                                        $
                                                        @endif
                                                    </span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Transportation </strong> <span class="float-right">
                                                        {{ $employees->earning_deduction->transportation}}

                                                        @if ($employees->earning_deduction->transportation_unit == 'bdt')
                                                        BDT
                                                        @endif
                                                        @if ($employees->earning_deduction->transportation_unit == 'persent')
                                                        %
                                                        @endif
                                                        @if ($employees->earning_deduction->transportation_unit == 'dolor')
                                                        $
                                                        @endif
                                                    </span></td>
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

                                         {{-- ********************Income Tax Count***************** --}}

                                         @if ($employees->earning_deduction->income_tax_unit == 'bdt')
                                         @php
                                             $incomeTax =$employees->earning_deduction->income_tax
                                         @endphp
                                         @endif

                                         @if ($employees->earning_deduction->income_tax_unit == 'persent')
                                         @php
                                             $incomeTax =$employees->earning_deduction->basic * $employees->earning_deduction->income_tax/100
                                         @endphp
                                         @endif
                                        <table class="table table-bordered">
                                            <tbody>
                                                <?php
                                                $tax_amount = $employees->earning_deduction->basic *$employees->earning_deduction->income_tax/100;

                                                $absence_amount = $employees->earning_deduction->basic /30 * $employees->earning_deduction->absence;
                                                    $Total_Deductions   = $incomeTax + $absence_amount + $employees->earning_deduction->advance+$employees->current_loan->current_loan;
                                                ?>
                                                <tr>
                                                    <td><strong>Tax Deducted </strong> <span class="float-right">{{ $employees->earning_deduction->income_tax}}
                                                        @if ($employees->earning_deduction->income_tax_unit == 'bdt')
                                                        BDT
                                                        @endif
                                                        @if ($employees->earning_deduction->income_tax_unit == 'persent')
                                                        %
                                                        @endif
                                                        @if ($employees->earning_deduction->income_tax_unit == 'dolor')
                                                        $
                                                        @endif</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Leave</strong> <span class="float-right">{{ $employees->earning_deduction->absence}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Advance</strong> <span class="float-right">{{ $employees->earning_deduction->advance}}</span></td>
                                                </tr>
                                                {{-- <tr>
                                                    <td><strong>ESI</strong> <span class="float-right">${{ $employees->esi }}</span></td>
                                                </tr> --}}
                                                <tr>
                                                    <td><strong>Loan</strong> <span class="float-right">{{ $employees->current_loan->current_loan }}BDT</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Total Deductions</strong> <span class="float-right"><strong><?php echo number_format($Total_Deductions,2);?>BDT</strong></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12" >
                                    <p><strong>Total Amount Payable to your bank Account:  {{ number_format($Total_Earnings-$Total_Deductions,2 )}} BDT</strong>
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
