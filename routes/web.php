<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\EmployeeTestimonialsController;


Route::post('newsletter', function () {
    request()->validate(['email' => 'required|email']);
    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us21'
    ]);
    try {
        // 0571c59f3b is the ID on the Mailchimp API for the newsletter list
    $response = $mailchimp->lists->addListMember('0571c59f3b', [
        'email_address' => request('email'),
        'status' => 'subscribed',
    ]);

    return redirect('/')->with('success', 'You are now signed up for our newsletter!');

    } catch (\Exception $e) {
        return redirect('/#newsletter')->withErrors([
            'email' => 'This email could not be added to our newsletter list.'
        ]);
    }


});

Route::get('/', [EmployeeController::class, 'index']);

Route::get('employees/{employee:slug}', [EmployeeController::class, 'show']);
Route::post('employees/{employee:slug}/testimonials', [EmployeeTestimonialsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
