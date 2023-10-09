<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Models\Employee;
use App\Http\Controllers\CompanyController;

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
Route::get('/', function () {
    return view('employees', [
        'employees' => Employee::all(),
        'companies' => Company::all()
    ]);
});



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
        'company' => $company,
        'companies' => Company::all()
    ]);
});

Route::get('users/{user:name}', function (App\Models\User $user) {
    return view('employees', [
        'employees' => $user->employees,
        'companies' => Company::all()
    ]);
});