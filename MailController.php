<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail From Test Mail',
            'body' => 'This Is Testing Mail'
        ];
        Mail::to('rajdighe16@gmail.com')->send(new MailSender($mailData));

        dd('Email Send Succesfully .');
    }
}
