<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ base_path().'/public/tenancy/assets/admin/assets/css/bootstrap.min.css' }}">
    {{-- <link rel="stylesheet" href="{{ asset('tenancy/assets/admin/assets/css/bootstrap.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ URL::to('tenancy/assets/admin/assets/css/bootstrap.min.css') }}"> --}}


<style>


* {
  box-sizing:border-box;
}
body {
  max-width: 1000px;
  margin: 10px auto;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  /* border: 1px solid #ddd; */
}
th, td {
  text-align: left;
  padding: 8px;
}
.table2{
    border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
    /* border: 1px solid black; */
}
.table3{
    border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
}




</style>
</head>
<body>
<div >
    <div class="container">


                             {{--********************************************************************** --}}
                                        <div style="overflow-x:auto;">
                                            <div style="  display: flex;align-items: center;justify-content: center;">
                                                 <div>
                                                     <h4 class="payslip-title">Payslip for the month of {{ \Carbon\Carbon::now()->format('M') }}   {{ \Carbon\Carbon::now()->year }}  </h4>

                                              </div>
                                              <div>
                                                <span>ALO IT CONSULTANTS</span><img src="" alt="">
                                            </div>
                                          </div>
                                          <table class="1">

                                        <tr>
                                          <td><small>Id:</small></td> <td> <small>{{ $employees->id }}</small> </td> <td><small>Date Of Joining:</small></td><td><small> {{ $employees->joining_date }}</small></td>
                                        </tr>

                                        <tr>
                                          <td><small>Name:</small></td> <td><small> {{ $employees->name }}</small></td> <td><small>Designation:</small></td><td><small>{{ $employees->designation }}</small></td>
                                        </tr>

                                        <tr>
                                          <td><small>Phone:</small></td> <td><small> 01850134450</small></td> <td><small>Department:</small></td><td><small></small></td>
                                        </tr>

                                        <tr>
                                          <td><small>Address:</small></td> <td><small>{{ $employees->address }}</small></td> <td><small>National Id:</small></td><td><small>{{ $employees->national_id  }}</small></td>
                                        </tr>

                                        <tr>
                                          <td><small>Email:</small></td> <td> <small>{{ $employees->email }}</small></td> <td><small>Bank Account:</small></td><td><small>{{ $employees->bank_account }}</small></td>
                                        </tr>

                                        <tr>
                                          <td><small>Salary for:</small></td> <td> <small>{{ \Carbon\Carbon::now()->format('M') }}   {{ \Carbon\Carbon::now()->year }} </small></td> <td><small>Issued On</small></td><td><small>{{ \Carbon\Carbon::now()->format('d-m-y') }}  </small></td>
                                        </tr>

                                          </table>
                                          <br>
                                                {{--  ____________________Earnings count .Start_____________________---}}

                                      <table class="table2 table">
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

                                                {{--  ____________________Deduction count .Start_____________________---}}

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
                                             @php
                                                $tax_amount = $employees->earning_deduction->basic *$employees->earning_deduction->income_tax/100;

                                                 $absence_amount = $employees->earning_deduction->basic /30 * $employees->earning_deduction->absence;
                                                 $Total_Deductions   = $incomeTax + $absence_amount + $employees->earning_deduction->advance+$employees->current_loan->current_loan;
                                             @endphp

                                        <tr class="text-info">
                                          <th>Earnings</th><th>Amount</th> <th>Deductions</th><th>Amount</th>
                                        </tr>
                                        <tr>
                                          <td><small>Basic</small></td> <td> <small>{{ $employees->earning_deduction->basic }}BDT</small> </td>
                                           <td><small>Income Tax</small></td><td>
                                            <small>
                                            {{ $employees->earning_deduction->income_tax}}
                                            @if ($employees->earning_deduction->income_tax_unit == 'bdt')
                                            BDT
                                            @endif
                                            @if ($employees->earning_deduction->income_tax_unit == 'persent')
                                            %
                                            @endif
                                            @if ($employees->earning_deduction->income_tax_unit == 'dolor')
                                            $
                                            @endif
                                        </small>
                                        </td>
                                        </tr>
                                        <tr>
                                          <td><small>House Rent</small></td>
                                           <td> <small>  {{ $employees->earning_deduction->house_rent }}
                                            @if ($employees->earning_deduction->house_rent_unit == 'bdt')
                                            BDT
                                            @endif
                                            @if ($employees->earning_deduction->house_rent_unit == 'persent')
                                            %
                                            @endif
                                            @if ($employees->earning_deduction->house_rent_unit == 'dolor')
                                            $
                                            @endif
                                        </small>
                                        </td>
                                             <td><small>Leave of Absence</small></td><td> <small>{{ $employees->earning_deduction->absence}}</small></td>
                                        </tr>
                                        <tr>
                                          <td><small>Medical</small></td> <td> <small>{{ $employees->earning_deduction->medical }}
                                            @if ($employees->earning_deduction->medical_unit == 'bdt')
                                            BDT
                                            @endif
                                            @if ($employees->earning_deduction->medical_unit == 'persent')
                                            %
                                            @endif
                                            @if ($employees->earning_deduction->medical_unit == 'dolor')
                                            $
                                            @endif
                                        </small>
                                        </td>
                                            <td><small>Advance</small></td>
                                            <td><small>{{ $employees->earning_deduction->advance}}BDT </small> </td>
                                        </tr>
                                        <tr>
                                          <td><small>Transportation</small></td>
                                           <td><small>    {{ $employees->earning_deduction->transportation}}

                                            @if ($employees->earning_deduction->transportation_unit == 'bdt')
                                            BDT
                                            @endif
                                            @if ($employees->earning_deduction->transportation_unit == 'persent')
                                            %
                                            @endif
                                            @if ($employees->earning_deduction->transportation_unit == 'dolor')
                                            $
                                            @endif
                                        </small>
                                        </td> <td><small>Loans</small></td>

                                        <td> <small>{{ $employees->current_loan->current_loan }}BDT </small></td>
                                        </tr>

                                        <tr>
                                          <td><small>Mobile</small></td>
                                          <td>  <small> {{ $employees->earning_deduction->mobile}}

                                            @if ($employees->earning_deduction->mobile_unit == 'bdt')
                                            BDT
                                            @endif
                                            @if ($employees->earning_deduction->mobile_unit == 'persent')
                                            %
                                            @endif
                                            @if ($employees->earning_deduction->mobile_unit == 'dolor')
                                            $
                                            @endif
                                        </small>
                                        </td>
                                         <td><strong> </strong></td><td></td>
                                        </tr>
                                        {{-- <tr>
                                          <td><strong>Lumsum</strong></td> <td> </td> <td><strong> </strong></td><td></td>
                                        </tr> --}}
                                        <tr class="text-success">
                                          <td><small>Total Earning</small></td> <td> <small><?php echo number_format($Total_Earnings,2) ?></small> </td> <td><small>Total Deducation </small></td><td><small><?php echo number_format($Total_Deductions,2);?>BDT</small></td>
                                        </tr>
                                      </table>


                                      <table>
                                          <tr>
                                              <td style="width: 300px;"><small>Total Amount payable to your bank Account</small> </td>
                                              <td><small> {{ number_format($Total_Earnings- $Total_Deductions,2)}} </small></td>
                                          </tr>
                                      </table>
                                      <p style="text-align: right;">
                                      <small> HR-AloIT Consultants</small>
                                      </p>

                                      <table>
                                          <tr>
                                              <td style="padding-right: 60px;">NB:</td>
                                              <td>
                                                <small>This is a computer generated payslip hence no signature is required </small>
                                           <small>This pay slip did not deduct tax at source. It is the responsibility the employee to pay the tax according to the Govermment's rules and responsibility.
                                                </small>

                                              </td>
                                          </tr>
                                      </table>

                                    </div>
                                </div>

</body>
</html>



