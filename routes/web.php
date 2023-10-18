<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\EmployeeTestimonialsController;
use App\Http\Controllers\NewsletterController;



Route::get('/', [EmployeeController::class, 'index']);

Route::get('employees/{employee:slug}', [EmployeeController::class, 'show']);
Route::post('employees/{employee:slug}/testimonials', [EmployeeTestimonialsController::class, 'store']);

Route::post('newsletter', NewsletterController::class);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('admin/employees/create', [EmployeeController::class, 'create'])->middleware('admin');