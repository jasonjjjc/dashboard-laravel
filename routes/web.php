<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Models\Category;

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

    // \Illuminate\Support\Facades\DB::listen(function ($query) {
    //     logger($query->sql, $query->bindings);
    // });

    return view('companies', [
        'companies' => Company::with('category')->get() 
    ]);
});


// display the company details page if the path is good
Route::get('companies/{company:slug}', function (Company $company) {
    // Use the "find" function inside a class called "Company" 
    // To find the company details
    // Pass those details to the "content" property
    // In the view called "company"


    return view('company', [
        'company' => $company
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('companies', [
        'companies' => $category->companies
    ]);
});

Route::get('users/{user:name}', function (App\Models\User $user) {
    return view('companies', [
        'companies' => $user->companies
    ]);
});