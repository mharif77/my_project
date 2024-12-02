<?php

EmployeeController
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\ProfileController;
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
// Admin Dashboard
// Route::get('/admin/dashboard', function () {
//     return view('backend.admin_dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Routes
Route::middleware('guest:admin')->prefix('admin')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'login'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'check_user']);

});

Route::middleware('auth:admin')->prefix('admin')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'logout'])->name('admin.logout');
    
    Route::view('/dashboard','backend.admin_dashboard');

    Route::resource('/product', ProductController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('employee', EmployeeController::class);

});

// Doctor Routes
Route::middleware('guest:doctor')->prefix('doctor')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Doctor\LoginController::class, 'login'])->name('doctor.login');
    Route::post('login', [App\Http\Controllers\Auth\Doctor\LoginController::class, 'check_user']);

});
Route::middleware('auth:doctor')->prefix('doctor')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Doctor\LoginController::class, 'logout'])->name('doctor.logout');
    
    Route::view('/dashboard','backend.doctor_dashboard');

});



// Employee  Routes
Route::middleware('guest:employee')->prefix('employee')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Employee\LoginController::class, 'login'])->name('employee.login');
    Route::post('login', [App\Http\Controllers\Auth\Employee\LoginController::class, 'check_user']);

});
Route::middleware('auth:employee')->prefix('employee')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Employee\LoginController::class, 'logout'])->name('employee.logout');
    
    Route::view('/dashboard','backend.employee_dashboard');

});