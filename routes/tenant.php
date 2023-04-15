<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

use App\Http\Controllers\Tenant\TenantIndexController;
use App\Http\Controllers\Tenant\TenantAdminController;
use App\Http\Controllers\Tenant\TenantSuperAdminController;
use App\Http\Controllers\Tenant\EmployeeController;
use App\Http\Controllers\Tenant\PayrollController;
use App\Http\Controllers\Tenant\PdfController;








/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    // Route::get('/', function () {
    //     dd(\App\Models\Admin::all());

    //     });

    Route::get('/', [TenantIndexController::class, 'homeIndex'])->name('tenant.landing.page');

// *********************Tenant Super Admin Route******************

    Route::get('super-admin', [TenantIndexController::class, 'super_admin_login_form'])->name('tenant.super.admin');
    Route::post('super/admin/login/', [TenantIndexController::class, 'super_admin_login'])->name('tenant.super.admin.login');
    Route::get('developer/admin/dashboard/', [TenantSuperAdminController::class, 'index'])->name('tenant.superadmin.dashboard');

// *************************Tenant Admin Route***********************

    Route::get('/admin/login/form', [TenantIndexController::class, 'admin_login_form'])->name('tenant.admin.login.form');
    Route::post('/admin/login/', [TenantIndexController::class, 'admin_login'])->name('tenant.admin.login');

    Route::middleware('adminAccess')->group(function(){
        Route::get('admin/dashboard/', [TenantAdminController::class, 'index'])->name('tenant.admin.dashboard');

    });


// *******************Tenant User Route******************

Route::get('/user/register/form', [TenantIndexController::class, 'user_register_form'])->name('tenant.user.register.form');
Route::post('/user/register/', [TenantIndexController::class, 'user_register'])->name('tenant.user.register');
Route::get('/user/login/form', [TenantIndexController::class, 'user_login_form'])->name('tenant.user.login.form');
Route::post('/user/login/', [TenantIndexController::class, 'user_login'])->name('tenant.user.login');


// ---------------- form employee ----------------//
Route::controller(EmployeeController::class)->group(function () {
    Route::get('all/employee/card', 'cardAllEmployee')->middleware('auth:admin')->name('all/employee/card');
    Route::get('all/employee/list', 'listAllEmployee')->middleware('auth:admin')->name('all/employee/list');
    Route::post('employee/save', 'saveRecord')->middleware('auth:admin')->name('employee/save');
    Route::get('all/employee/view/edit/{employee_id}', 'viewRecord:admin');
    Route::post('all/employee/update', 'updateRecord')->middleware('auth:admin')->name('all/employee/update');
    Route::get('all/employee/delete/{employee_id}', 'deleteRecord')->middleware('auth:admin');
    Route::post('all/employee/search', 'employeeSearch')->name('all/employee/search');
    Route::post('all/employee/list/search', 'employeeListSearch')->name('all/employee/list/search');

    Route::get('form/departments/page', 'index')->middleware('auth:admin')->name('form/departments/page');
    Route::post('form/departments/save', 'saveRecordDepartment')->middleware('auth:admin')->name('form/departments/save');
    Route::post('form/department/update', 'updateRecordDepartment')->middleware('auth:admin')->name('form/department/update');
    Route::post('form/department/delete', 'deleteRecordDepartment')->middleware('auth:admin')->name('form/department/delete');

    Route::get('form/designations/page', 'designationsIndex')->middleware('auth:admin')->name('form/designations/page');
    Route::post('form/designations/save', 'saveRecordDesignations')->middleware('auth:admin')->name('form/designations/save');
    Route::post('form/designations/update', 'updateRecordDesignations')->middleware('auth:admin')->name('form/designations/update');
    Route::post('form/designations/delete', 'deleteRecordDesignations')->middleware('auth:admin')->name('form/designations/delete');

    Route::get('form/timesheet/page', 'timeSheetIndex')->middleware('auth:admin')->name('form/timesheet/page');
    Route::post('form/timesheet/save', 'saveRecordTimeSheets')->middleware('auth:admin')->name('form/timesheet/save');
    Route::post('form/timesheet/update', 'updateRecordTimeSheets')->middleware('auth:admin')->name('form/timesheet/update');
    Route::post('form/timesheet/delete', 'deleteRecordTimeSheets')->middleware('auth:admin')->name('form/timesheet/delete');

    Route::get('form/overtime/page', 'overTimeIndex')->middleware('auth:admin')->name('form/overtime/page');
    Route::post('form/overtime/save', 'saveRecordOverTime')->middleware('auth:admin')->name('form/overtime/save');
    Route::post('form/overtime/update', 'updateRecordOverTime')->middleware('auth:admin')->name('form/overtime/update');
    Route::post('form/overtime/delete', 'deleteRecordOverTime')->middleware('auth:admin')->name('form/overtime/delete');
});

// --------------------- form payroll  -----------------------//

Route::controller(PayrollController::class)->group(function () {
    Route::get('form/salary/page', 'salary')->middleware('auth:admin')->name('form/salary/page');
    Route::post('form/salary/save','saveRecord')->middleware('auth:admin')->name('form/salary/save');
    Route::post('form/salary/update', 'updateRecord')->middleware('auth:admin')->name('form/salary/update');
    Route::post('form/salary/delete', 'deleteRecord')->middleware('auth:admin')->name('form/salary/delete');
    Route::get('form/salary/view/{user_id}', 'salaryView')->middleware('auth:admin');
    Route::get('form/payroll/items', 'payrollItems')->middleware('auth:admin')->name('form/payroll/items');
});

Route::controller(PdfController::class)->group(function(){
 Route::get('pdf/payslip/{id}', 'payslip_pdf')->name('pdf/payslip');
});











});
