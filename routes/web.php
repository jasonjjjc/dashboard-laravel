<?php

use Illuminate\Support\Facades\Route;

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
    return view('companies');
});


// redirect all random non-existent paths to the homepage
Route::get('/{path}', function ($random) {
    if (! file_exists($random)) {
        return redirect('/');
    }
});


// display the company details page if the path is good
Route::get('companies/{company}', function ($slug) {
    $path = __DIR__ . "/../resources/companies/{$slug}.html";
    $company = file_get_contents($path);
    
    return view('company', [
        'details' => $company
    ]);
    
})->where('company', '[A-z_\-]+');

