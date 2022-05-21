<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail() {

        $details = [
            'title' => 'Hi from Ezra', //title of the email
            'body' => 'Just testing mail using Gmail' // body of the email
        ];

        Mail::to('muirezra77@gmail.com')->send(new TestMail($details)); //Mail is an in-built class which allows us to send emails.
        return "Email sent";
    }
}
