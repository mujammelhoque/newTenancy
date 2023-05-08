<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Middleware\AdminAccess;
use Illuminate\Support\Facades\Auth;


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
    Route::middleware('adminAccess')->group(function(){
        Route::get('all/employee/card', 'cardAllEmployee')->name('all/employee/card');
        Route::get('all/employee/list', 'listAllEmployee')->name('all/employee/list');
        Route::post('employee/save', 'saveRecord')->name('employee/save');
        Route::get('all/employee/view/edit/{employee_id}', 'viewRecord:admin');
        Route::post('all/employee/update', 'updateRecord')->name('all/employee/update');
        Route::get('all/employee/delete/{employee_id}', 'deleteRecord');
        Route::post('all/employee/search', 'employeeSearch')->name('all/employee/search');
        Route::post('all/employee/list/search', 'employeeListSearch')->name('all/employee/list/search');

        Route::get('form/departments/page', 'index')->name('form/departments/page');
        Route::post('form/departments/save', 'saveRecordDepartment')->name('form/departments/save');
        Route::post('form/department/update', 'updateRecordDepartment')->name('form/department/update');
        Route::post('form/department/delete', 'deleteRecordDepartment')->name('form/department/delete');

        Route::get('form/designations/page', 'designationsIndex')->name('form/designations/page');
        Route::post('form/designations/save', 'saveRecordDesignations')->name('form/designations/save');
        Route::post('form/designations/update', 'updateRecordDesignations')->name('form/designations/update');
        Route::post('form/designations/delete', 'deleteRecordDesignations')->name('form/designations/delete');

        Route::get('form/timesheet/page', 'timeSheetIndex')->name('form/timesheet/page');
        Route::post('form/timesheet/save', 'saveRecordTimeSheets')->name('form/timesheet/save');
        Route::post('form/timesheet/update', 'updateRecordTimeSheets')->name('form/timesheet/update');
        Route::post('form/timesheet/delete', 'deleteRecordTimeSheets')->name('form/timesheet/delete');

        Route::get('form/overtime/page', 'overTimeIndex')->name('form/overtime/page');
        Route::post('form/overtime/save', 'saveRecordOverTime')->name('form/overtime/save');
        Route::post('form/overtime/update', 'updateRecordOverTime')->name('form/overtime/update');
        Route::post('form/overtime/delete', 'deleteRecordOverTime')->name('form/overtime/delete');
    });

});

// --------------------- form payroll  -----------------------//

Route::controller(PayrollController::class)->group(function () {
    Route::middleware('adminAccess')->group(function(){
        Route::get('form/salary/page', 'salary')->name('form/salary/page');
        Route::post('form/salary/save','saveRecord')->name('form/salary/save');
        Route::post('form/salary/update', 'updateRecord')->name('form/salary/update');
        Route::post('form/salary/delete', 'deleteRecord')->name('form/salary/delete');
        Route::get('form/salary/view/{user_id}', 'salaryView');
        Route::get('form/payroll/items', 'payrollItems')->name('form/payroll/items');
    });
});

Route::controller(PdfController::class)->group(function(){
 Route::get('pdf/payslip/{id}', 'payslip_pdf')->name('pdf/payslip');
});











});
