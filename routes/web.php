<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;


Route::get('/', [EmployeeController::class, 'index']);
Route::get('employees/{employee:slug}', [EmployeeController::class, 'show']);

// Route::get('companies/{company:slug}', function (Company $company) {
//     return view('employees', [
//         'employees' => $company->employees,
//         'currentCompany' => $company,
//         'companies' => Company::all(),
//         'user' => User::first()
//     ]);
// });

Route::get('users/{user:name}', function (App\Models\User $user) {
    return view('employees', [
        'employees' => $user->employees,
        'user' => $user,
    ]);
});