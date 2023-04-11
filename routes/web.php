<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\IndexController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ********************Super Admin Route*******************************
Route::get('/super-admin', [IndexController::class, 'super_admin_login_form'])->name('super.admin');
Route::post('/super-admin-login', [IndexController::class, 'super_admin_login'])->name('super.admin.login');

Route::middleware('auth:super_admin')->group(function () {
    Route::get('/super/admin/dashboard', [SuperAdminController::class, 'dashboard'])->name('super.admin.dashboard');
    Route::post('/super/admin/tenant/accept', [SuperAdminController::class, 'tenant_accept'])->name('super.admin.tenant.accept');
    Route::post('/super/admin/tenant/reject', [SuperAdminController::class, 'tenant_reject'])->name('super.admin.tenant.reject');

   
});

require __DIR__.'/auth.php';
