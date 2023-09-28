<?php

use Illuminate\Support\Facades\Route;
use App\Models\Company;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

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


// redirect all random non-existent paths to the homepage
Route::get('/{path}', function ($random) {
    if (!file_exists($random)) {
        return redirect('/');
    }
});


// display the company details page if the path is good
Route::get('companies/{company}', function ($slug) {
    // Use the "find" function inside a class called "Company" 
    // To find the company details
    // Pass those details to the "content" property
    // In the view called "company"

    $companyDetails = Company::find($slug);

    return view('company', [
        'content' => $companyDetails
    ]);
})->where('company', '[A-z_\-]+');
