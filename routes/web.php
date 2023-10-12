<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisterController;


Route::get('/', [EmployeeController::class, 'index']);
Route::get('employees/{employee:slug}', [EmployeeController::class, 'show']);

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);