
@extends('tenant.admin.payslip.layouts.master')
@section('content')
    {{-- message --}}
    {{-- {!! Toastr::message() !!} --}}

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Employee Salary <span id="year"></span></h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('tenant.admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Salary</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Add Salary</a>
                    </div>
                </div>
            </div>

            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Employee Name</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option value=""> -- Select -- </option>
                            <option value="">Employee</option>
                            <option value="1">Manager</option>
                        </select>
                        <label class="focus-label">Role</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option> -- Select -- </option>
                            <option> Pending </option>
                            <option> Approved </option>
                            <option> Rejected </option>
                        </select>
                        <label class="focus-label">Leave Status</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus">
                        <div class="cal-icon">
                            <input class="form-control floating datetimepicker" type="text">
                        </div>
                        <label class="focus-label">From</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus">
                        <div class="cal-icon">
                            <input class="form-control floating datetimepicker" type="text">
                        </div>
                        <label class="focus-label">To</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <a href="#" class="btn btn-success btn-block"> Search </a>
                </div>
            </div>
            <!-- /Search Filter -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Employee </th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Basic</th>
                                    <th>Total</th>
                                    <th>Payslip</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $eminfo)
                                <tr>
                                    {{-- <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('employee/profile/'.$items->user_id) }}" class="avatar"><img alt="" src="{{ URL::to('/assets/images/'. $items->avatar) }}"></a>
                                            <a href="{{ url('employee/profile/'.$items->user_id) }}">{{ $items->name }}<span>{{ $items->position }}</span></a>

                                        </h2>
                                    </td> --}}
                                    {{-- <td>{{ $items->user_id }}</td> --}}
                                    <td  class="id">{{ $eminfo->id }}</td>
                                    <td  class="name">{{ $eminfo->name }}</td>
                                    <td  class="email">{{ $eminfo->email }}</td>
                                    <td  class="da">{{ $eminfo->phone }}</td>
                                    <td  class="basic">{{ $eminfo->earning_deduction->basic ??'' }}</td>
                                    <td  class="total">{{ $eminfo->earning_deduction->gross_salary ??'' }}</td>

                                    <td hidden class="house_rent">{{ $eminfo->earning_deduction->house_rent ??''}}</td>
                                    <td hidden class="medical">{{ $eminfo->earning_deduction->medical??'' }}</td>
                                    <td hidden class="transportation">{{ $eminfo->earning_deduction->transportation??'' }}</td>
                                    <td hidden class="mobile">{{ $eminfo->earning_deduction->mobile??'' }}</td>
                                    <td hidden>
                                        <span  class="income_tax">{{ $eminfo->earning_deduction->income_tax??'' }}</span>%<span></span>
                                    </td>
                                    <td hidden class="absence">{{ $eminfo->earning_deduction->absence ??''}}</td>
                                    <td hidden class="advance">{{ $eminfo->earning_deduction->advance??'' }}</td>

                                    <td hidden class="loan">{{ $eminfo->earning_deduction->loan??'' }}</td>

                                    <td><a class="btn btn-sm btn-primary" href="{{ url('form/salary/view/'.$eminfo->id) }}" target="_blank">Generate Slip</a></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i class="material-icons">build</i>
                                                <i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item userSalary" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item salaryDelete" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Content -->

        <!-- Add Salary Modal -->
        <div id="add_salary" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Staff Salary</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('form/salary/save') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Select Employee</label>
                                        <select class="select select2s-hidden-accessible @error('tenant_employee_id') is-invalid @enderror" style="width: 100%;" tabindex="-1" aria-hidden="true" id="tenant_employee_id" name="tenant_employee_id">
                                            <option value="">-- Select --</option>
                                            @foreach ($employees as $employee )
                                                <option value="{{ $employee->id }}" >{{ $employee->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <input class="form-control" type="hidden" name="user_id" id="employee_id" readonly> --}}
                                <div class="col-sm-6">
                                    <label>Gross Salary</label>
                                    <input class="form-control @error('gross_salary') is-invalid @enderror" type="number" name="gross_salary" id="gross_salary" value="{{ old('gross_salary') }}" placeholder="Enter total salary">
                                    @error('gross_salary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="text-primary">Earnings</h4>
                                    <div class="form-group">
                                        <label>Basic</label>
                                        <input class="form-control @error('basic') is-invalid @enderror" type="number" name="basic" id="basic" value="{{ old('basic') }}" placeholder="Enter basic">
                                        @error('basic')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>House Rent</label>
                                        <input class="form-control @error('house_rent') is-invalid @enderror" type="number"  name="house_rent" id="house_rent" value="{{ old('house_rent') }}" placeholder="Enter House Rent">
                                        @error('house_rent')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Medical Allowance</label>
                                        <input class="form-control @error('medical') is-invalid @enderror" type="number"  name="medical" id="medical" value="{{ old('medical') }}" placeholder="Enter Medical allowance">
                                        @error('medical')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Transportation</label>
                                        <input class="form-control @error('transportation') is-invalid @enderror" type="number"  name="transportation" id="transportation" value="{{ old('transportation') }}" placeholder="Enter Transportation Cost">
                                        @error('transportation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input class="form-control @error('mobile') is-invalid @enderror" type="number"  name="mobile" id="mobile" value="{{ old('mobile') }}" placeholder="Enter Mobile Bill">
                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Medical  Allowance</label>
                                        <input class="form-control @error('medical_allowance') is-invalid @enderror" type="number" name="medical_allowance" id="medical_allowance" value="{{ old('medical_allowance') }}" placeholder="Enter medical  allowance">
                                        @error('medical_allowance')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}
                                </div>

                                <div class="col-sm-6">
                                    <h4 class="text-primary">Deductions</h4>
                                    <div class="form-group">
                                        <label>Income Tax</label>
                                        <input class="form-control @error('income_tax') is-invalid @enderror" type="number" name="income_tax" id="income_tax" value="{{ old('income_tax') }}" placeholder="Enter Income tax">
                                        @error('income_tax')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Leave of Absence</label>
                                        <input class="form-control @error('absence') is-invalid @enderror" type="number" name="absence" id="absence" value="{{ old('absence') }}" placeholder="Enter leave of absence">
                                        @error('absence')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Advance</label>
                                        <input class="form-control @error('pf') is-invalid @enderror" type="number" name="advance" id="advance" value="{{ old('advance') }}" placeholder="Enter advance">
                                        @error('advance')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Loan</label>
                                        <input class="form-control @error('loan') is-invalid @enderror" type="text" name="loan" id="loan" value="{{ old('loan') }}" placeholder="Enter leave">
                                        @error('loan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Prof. Tax</label>
                                        <input class="form-control @error('prof_tax') is-invalid @enderror" type="number" name="prof_tax" id="prof_tax" value="{{ old('prof_tax') }}" placeholder="Enter Prof. Tax">
                                        @error('prof_tax')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Loan</label>
                                        <input class="form-control @error('labour_welfare') is-invalid @enderror" type="number" name="labour_welfare" id="labour_welfare" value="{{ old('labour_welfare') }}" placeholder="Enter Loan">
                                        @error('labour_welfare')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Salary Modal -->

        <!-- Edit Salary Modal -->
        <div id="edit_salary" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Staff Salary</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('form/salary/update') }}" method="POST">
                            @csrf


                            <input class="form-control" type="hidden" name="tenant_employee_id" id="e_id" value="" readonly>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name Staff</label>
                                        <input class="form-control " type="text" name="" id="e_name" value="" readonly>
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label>Gross Salary</label>
                                    <input class="form-control" type="text" name="salary" id="e_salary" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="text-primary">Earnings</h4>
                                    <div class="form-group">
                                        <label>Basic</label>
                                        <input class="form-control" type="text" name="basic" id="e_basic" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>House Rent</label>
                                        <input class="form-control" type="text"  name="house_rent" id="e_house_rent" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Medical Allowance</label>
                                        <input class="form-control" type="text"  name="medical" id="e_medical" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Transportation</label>
                                        <input class="form-control" type="text"  name="transportation" id="e_transportation" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input class="form-control" type="text"  name="mobile" id="e_mobile" value="">
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <h4 class="text-primary">Deductions</h4>
                                    <div class="form-group">
                                        <label>Income Tax</label>
                                        <input class="form-control" type="text"  name="income_tax" id="e_income_tax" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Abasence</label>
                                        <input class="form-control" type="text" name="absence" id="e_absence" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Advance</label>
                                        <input class="form-control" type="text" name="advance" id="e_advance" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Loan</label>
                                        <input class="form-control" type="text" name="loan" id="e_loan" value="">
                                    </div>

                                </div>
                            </div>


                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Salary Modal -->

        <!-- Delete Salary Modal -->
        <div class="modal custom-modal fade" id="delete_salary" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Salary</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <form action="{{ route('form/salary/delete') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <input type="hidden" name="id" class="e_id" value="">
                                        <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Salary Modal -->

    </div>
    <!-- /Page Wrapper -->
    @section('script')
        <script>
            $(document).ready(function() {
                $('.select2s-hidden-accessible').select2({
                    closeOnSelect: false
                });
            });
        </script>
        <script>
            // select auto id and email
            $('#name').on('change',function()
            {
                $('#employee_id').val($(this).find(':selected').data('employee_id'));
            });
        </script>
        {{-- update js --}}
        <script>
            $(document).on('click','.userSalary',function()
            {
                var _this = $(this).parents('tr');
                $('#e_id').val(_this.find('.id').text());
                $('#e_name').val(_this.find('.name').text());
                $('#e_salary').val(_this.find('.salary').text());
                $('#e_basic').val(_this.find('.basic').text());
                $('#e_house_rent').val(_this.find('.house_rent').text());
                $('#e_medical').val(_this.find('.medical').text());
                $('#e_transportation').val(_this.find('.transportation').text());
                $('#e_mobile').val(_this.find('.mobile').text());
                $('#e_income_tax').val(_this.find('.income_tax').text());
                $('#e_absence').val(_this.find('.absence').text());
                $('#e_advance').val(_this.find('.advance').text());
                $('#e_loan').val(_this.find('.loan').text());

            });
        </script>
         {{-- delete js --}}
    <script>
        $(document).on('click','.salaryDelete',function()
        {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.id').text());
        });
    </script>
    @endsection
@endsection
