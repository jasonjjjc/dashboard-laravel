<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;

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
// homepage displays all the companies in the resources/companies directory
Route::get('/', [EmployeeController::class, 'index']);



// display the company details page if the path is good
Route::get('employees/{employee:slug}', function (Employee $employee) {
    // Use the "find" function inside a class called "Company" 
    // To find the company details
    // Pass those details to the "content" property
    // In the view called "company"


    return view('employee', [
        'employee' => $employee
    ]);
});

Route::get('companies/{company:slug}', function (Company $company) {
    return view('employees', [
        'employees' => $company->employees,
        'currentCompany' => $company,
        'companies' => Company::all(),
        'user' => User::first()
    ]);
});

Route::get('users/{user:name}', function (App\Models\User $user) {
    return view('employees', [
        'employees' => $user->employees,
        'user' => $user,
        'companies' => Company::all()
    ]);
});