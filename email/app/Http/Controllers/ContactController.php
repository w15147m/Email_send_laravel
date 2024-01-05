<?php

namespace App\Http\Controllers;

use App\Mail\ContacttMail;

use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{ 
    //  public function mail_sender(Request $request)
    // {
    //     // dd($request->all());
    //     ail::to('wa4343053@gmail.com')->send(new ContacttMail($request));
    //     return redirect('/');
    // }

    public function mail_sender(Request $request)
    {
        // dd($request->all());
        Mail::to('wa4343053@gmail.com')->send(new ContacttMail($request));
        // Mail::to('wa4343053@gmail.com')->send(new ContacttMail($request->all()));

        return redirect('/');
    }
    
}
