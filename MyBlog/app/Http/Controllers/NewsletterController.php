<?php

namespace App\Http\Controllers;

use App\Services\MailchimpNewsletter;
use App\Services\Newsletter;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter){
        request()->validate(['email' => 'required|email']);

//    $response = $mailchimp->lists->getAllLists();
//    ddd($response);

        try {
            $newsletter->subscribe(request('email'));
        }catch (Exception $e){
            throw ValidationException::withMessages([
                'email' => 'This email could not be added into newsletter',
            ]);

        }
        return redirect('/')
            ->with('success', 'You are now signed up for our newsletter!');
    }
}
