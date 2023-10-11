<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;


Route::get('/', [EmployeeController::class, 'index']);
Route::get('employees/{employee:slug}', [EmployeeController::class, 'show']);

Route::get('users/{user:name}', function (App\Models\User $user) {
    return view('employees.index', [
        'employees' => $user->employees,
        'companies' => Company::all(),
        'user' => $user,
    ]);
});