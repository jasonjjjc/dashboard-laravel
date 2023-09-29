<?php

use Illuminate\Support\Facades\Route;
use App\Models\Company;

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
    return view('companies', [
        'companies' => Company::all()
    ]);
});


// display the company details page if the path is good
Route::get('companies/{company}', function ($id) {
    // Use the "find" function inside a class called "Company" 
    // To find the company details
    // Pass those details to the "content" property
    // In the view called "company"

    $companyDetails = Company::findOrFail($id);


    return view('company', [
        'company' => $companyDetails
    ]);
});


// handle all remaining url errors by redirecting to the homepage
// Route::get('/{path}', function ($random) {
//     if (!file_exists($random)) {
//         return redirect('/');
//     }
// });