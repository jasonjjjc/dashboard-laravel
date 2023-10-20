<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\EmployeeTestimonialsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\CompanyController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('employees', [EmployeeController::class, 'index']);
Route::get('employees/{employee:slug}', [EmployeeController::class, 'show']);
Route::post('employees/{employee:slug}/testimonials', [EmployeeTestimonialsController::class, 'store']);
Route::get('admin/employees/create', [EmployeeController::class, 'create'])->middleware('admin');
Route::post('admin/employees', [EmployeeController::class, 'store'])->middleware('admin');

Route::get('companies', [CompanyController::class, 'index']);
Route::get('admin/companies/create', [CompanyController::class, 'create'])->middleware('admin');
Route::post('admin/companies', [CompanyController::class, 'store'])->middleware('admin');



Route::post('newsletter', NewsletterController::class);


Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


