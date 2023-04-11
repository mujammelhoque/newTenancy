
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="set_active(['home','em/dashboard']) submenu">
                    <a href="#" class="set_active(['home','em/dashboard']) ? 'noti-dot' : '' }}">
                        <i class="la la-dashboard"></i>
                        <span> Dashboard</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="set_active(['home'])}}" href=" url('home') }}">Admin Dashboard</a></li>
                        <li><a class="set_active(['em/dashboard'])}}" href="{{ url('em/dashboard') }}">Employee Dashboard</a></li>
                    </ul>
                </li>
                @if (Auth::user()->role_name??''=='Admin')
                    <li class="menu-title"> <span>Authentication</span> </li>
                    <li class="set_active(['search/user/list','userManagement','activity/log','activity/login/logout'])}} submenu">
                        <a href="#" class="{{ set_active(['search/user/list','userManagement','activity/log','activity/login/logout']) ? 'noti-dot' : '' }}">
                            <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                            <li><a class="set_active(['search/user/list','userManagement'])}}" href="{{ url('userManagement') }}">All User</a></li>
                            <li><a class="set_active(['activity/log'])}}" href="{{ url('activity/log') }}">Activity Log</a></li>
                            <li><a class="set_active(['activity/login/logout'])}}" href="{{ url('activity/login/logout') }}">Activity User</a></li>
                        </ul>
                    </li>
                @endif
                <li class="menu-title"> <span>Employees</span> </li>
                <li class="set_active(['all/employee/list','all/employee/list','all/employee/card','form/holidays/new','form/leaves/new',
                    'form/leavesemployee/new','form/leavesettings/page','attendance/page',
                    'attendance/employee/page','form/departments/page','form/designations/page',
                    'form/timesheet/page','form/shiftscheduling/page','form/overtime/page'])}} submenu">
                    <a href="#" class="set_active(['all/employee/list','all/employee/card','form/holidays/new','form/leaves/new',
                    'form/leavesemployee/new','form/leavesettings/page','attendance/page',
                    'attendance/employee/page','form/departments/page','form/designations/page',
                    'form/timesheet/page','form/shiftscheduling/page','form/overtime/page']) ? 'noti-dot' : '' }}">
                        <i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="set_active(['all/employee/list','all/employee/card'])}}" href="{{ url('all/employee/card') }}">All Employees</a></li>
                        {{-- <li><a class="set_active(['form/holidays/new'])}}" href="url('form/holidays/new') }}">Holidays</a></li>
                        <li><a class="set_active(['form/leaves/new'])}}" href="url('form/leaves/new') }}">Leaves (Admin)
                            <span class="badge badge-pill bg-primary float-right">1</span></a>
                        </li>
                        <li><a class="set_active(['form/leavesemployee/new'])}}" href="{{url('form/leavesemployee/new')}}">Leaves (Employee)</a></li>
                        <li><a class="set_active(['form/leavesettings/page'])}}" href="{{ url('form/leavesettings/page') }}">Leave Settings</a></li>
                        <li><a class="set_active(['attendance/page'])}}" href="{{ url('attendance/page') }}">Attendance (Admin)</a></li>
                        <li><a class="set_active(['attendance/employee/page'])}}" href="{{ url('attendance/employee/page') }}">Attendance (Employee)</a></li>
                        <li><a class="set_active(['form/departments/page'])}}" href="{{ url('form/departments/page') }}">Departments</a></li>
                        <li><a class="set_active(['form/designations/page'])}}" href="{{ url('form/designations/page') }}">Designations</a></li>
                        <li><a class="set_active(['form/timesheet/page'])}}" href="{{ url('form/timesheet/page') }}">Timesheet</a></li>
                        <li><a class="set_active(['form/shiftscheduling/page'])}}" href="{{ url('form/shiftscheduling/page') }}">Shift & Schedule</a></li>
                        <li><a class="set_active(['form/overtime/page'])}}" href="{{ url('form/overtime/page') }}">Overtime</a></li> --}}
                    </ul>
                </li>
                <li class="menu-title"> <span>HR</span> </li>
                {{-- <li class="set_active(['create/estimate/page','form/estimates/page','payments','expenses/page'])}} submenu">
                    <a href="#" class=" set_active(['create/estimate/page','form/estimates/page','payments','expenses/page']) ? 'noti-dot' : '' }}">
                        <i class="la la-files-o"></i>
                        <span> Sales </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="set_active(['create/estimate/page','form/estimates/page'])}}" href="{{ url('form/estimates/page') }}">Estimates</a></li>
                        <li><a class="set_active(['payments'])}}" href="{{ url('payments') }}">Payments</a></li>
                        <li><a class="set_active(['expenses/page'])}}" href="{{ url('expenses/page') }}">Expenses</a></li>
                    </ul>
                </li> --}}
                <li class="set_active(['form/salary/page','form/payroll/items'])}} submenu">
                    <a href="#" class=" set_active(['form/salary/page','form/payroll/items']) ? 'noti-dot' : '' }}"><i class="la la-money"></i>
                    <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="set_active(['form/salary/page'])}}" href="{{ url('form/salary/page') }}"> Employee Salary </a></li>
                        <li><a href="{{ url('form/salary/page') }}"> Payslip </a></li>
                        <li><a class="set_active(['form/payroll/items'])}}" href="{{ url('form/payroll/items') }}"> Payroll Items </a></li>
                    </ul>
                </li>
                <li class="set_active(['form/expense/reports/page','form/invoice/reports/page','form/leave/reports/page','form/daily/reports/page'])}} submenu">
                    <a href="#" class=" set_active(['form/expense/reports/page','form/invoice/reports/page','form/leave/reports/page','form/daily/reports/page']) ? 'noti-dot' : '' }}"><i class="la la-pie-chart"></i>
                    <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        {{-- <li><a class="set_active(['form/expense/reports/page'])}}" href="{{ url('form/expense/reports/page') }}"> Expense Report </a></li>
                        <li><a class="set_active(['form/invoice/reports/page'])}}" href="{{ url('form/invoice/reports/page') }}"> Invoice Report </a></li> --}}
                        {{-- <li><a class="set_active([''])}}" href="payments-reports.html"> Payments Report </a></li>
                        <li><a class="set_active([''])}}" href="employee-reports.html"> Employee Report </a></li> --}}
                        <li><a class="set_active([''])}}" href="payslip-reports.html"> Payslip Report </a></li>
                        {{-- <li><a class="set_active([''])}}" href="attendance-reports.html"> Attendance Report </a></li>
                        <li><a class="set_active(['form/leave/reports/page'])}}" href="{{ url('form/leave/reports/page') }}"> Leave Report </a></li>
                        <li><a class="set_active(['form/daily/reports/page'])}}" href="{{ url('form/daily/reports/page') }}"> Daily Report </a></li> --}}
                    </ul>
                </li>

                {{-- <li class="menu-title"> <span>Performance</span> </li>
                <li class="set_active(['form/performance/indicator/page','form/performance/page','form/performance/appraisal/page'])}} submenu">
                    <a href="#" class=" set_active(['form/performance/indicator/page','form/performance/page','form/performance/appraisal/page']) ? 'noti-dot' : '' }}"><i class="la la-graduation-cap"></i>
                    <span> Performance </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="set_active(['form/performance/indicator/page'])}}" href="{{ url('form/performance/indicator/page') }}"> Performance Indicator </a></li>
                        <li><a class="set_active(['form/performance/page'])}}" href="{{ url('form/performance/page') }}"> Performance Review </a></li>
                        <li><a class="set_active(['form/performance/appraisal/page'])}}" href="{{ url('form/performance/appraisal/page') }}"> Performance Appraisal </a></li>
                    </ul>
                </li>
                 --}}

                {{-- <li class="set_active(['form/training/list/page','form/trainers/list/page'])}} submenu">
                    <a href="#" class=" set_active(['form/training/list/page','form/trainers/list/page']) ? 'noti-dot' : '' }}"><i class="la la-edit"></i>
                    <span> Training </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="set_active(['form/training/list/page'])}}" href="{{ url('form/training/list/page') }}"> Training List </a></li>
                        <li><a class="set_active(['form/trainers/list/page'])}}" href="{{ url('form/trainers/list/page') }}"> Trainers</a></li>
                        <li><a class="set_active(['form/training/type/list/page'])}}" href="{{ url('form/training/type/list/page') }}"> Training Type </a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu-title"> <span>Administration</span> </li>
                <li> <a href="assets.html"><i class="la la-object-ungroup">
                    </i> <span>Assets</span></a>
                </li> --}}
                {{-- <li class="set_active(['user/dashboard/index','jobs/dashboard/index','user/dashboard/all','user/dashboard/applied/jobs','user/dashboard/interviewing','user/dashboard/offered/jobs','user/dashboard/visited/jobs','user/dashboard/archived/jobs','user/dashboard/save','jobs','job/applicants','job/details','page/manage/resumes','page/shortlist/candidates','page/interview/questions','page/offer/approvals','page/experience/level','page/candidates','page/schedule/timing','page/aptitude/result'])}} submenu">
                    <a href="#" class=" set_active(['user/dashboard/index','jobs/dashboard/index','user/dashboard/all','user/dashboard/save','jobs','job/applicants','job/details']) ? 'noti-dot' : '' }}"><i class="la la-briefcase"></i>
                        <span> Jobs </span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }} {{ (request()->is('job/applicants/*')) ? 'display: block;' : 'display: none;' }}">
                        <li><a class="set_active(['user/dashboard/index','user/dashboard/all','user/dashboard/applied/jobs','user/dashboard/interviewing','user/dashboard/offered/jobs','user/dashboard/visited/jobs','user/dashboard/archived/jobs','user/dashboard/save'])}}" href="{{ url('user/dashboard/index') }}"> User Dasboard </a></li>
                        <li><a class="set_active(['jobs/dashboard/index'])}}" href="{{ url('jobs/dashboard/index') }}"> Jobs Dasboard </a></li>
                        <li><a class="set_active(['jobs','job/applicants','job/details'])}} {{ (request()->is('job/applicants/*')) ? 'active' : '' }}" href="{{ url('jobs') }} "> Manage Jobs </a></li>
                        <li><a class="set_active(['page/manage/resumes'])}}" href="{{ url('page/manage/resumes') }}"> Manage Resumes </a></li>
                        <li><a class="set_active(['page/shortlist/candidates'])}}" href="{{ url('page/shortlist/candidates') }}"> Shortlist Candidates </a></li>
                        <li><a class="set_active(['page/interview/questions'])}}" href="{{ url('page/interview/questions') }}"> Interview Questions </a></li>
                        <li><a class="set_active(['page/offer/approvals'])}}" href="{{ url('page/offer/approvals') }}"> Offer Approvals </a></li>
                        <li><a class="set_active(['page/experience/level'])}}" href="{{ url('page/experience/level') }}"> Experience Level </a></li>
                        <li><a class="set_active(['page/candidates'])}}" href="{{ url('page/candidates') }}"> Candidates List </a></li>
                        <li><a class="set_active(['page/schedule/timing'])}}" href="{{ url('page/schedule/timing') }}"> Schedule timing </a></li>
                        <li><a class="set_active(['page/aptitude/result'])}}" href="{{ url('page/aptitude/result') }}"> Aptitude Results </a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu-title"> <span>Pages</span> </li>
                <li class="set_active(['employee/profile/*'])}} submenu">
                    <a href="#"><i class="la la-user"></i>
                        <span> Profile </span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a class="set_active(['employee/profile/*'])}}" href="{{ url('all/employee/list') }}"> Employee Profile </a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
