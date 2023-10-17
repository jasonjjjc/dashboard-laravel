<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke()
    {
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
    }
}
