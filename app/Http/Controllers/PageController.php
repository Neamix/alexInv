<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home () {
        return view('Pages.index');
    }

    public function about () {
        return view('Pages.aboutus');
    }

    
    public function service () {
        return view('Pages.service');
    }

    public function contact () {
        return view('Pages.contact');
    }

    public function callus () {
        return view('Pages.callus');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'Fname' => 'required|string|max:255',
            'Lname' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        Mail::to('admin@arkticsolutions.com')->send(new ContactMail($request->all()));
        return redirect()->route('contact.show')->with('success', 'Thank you for your message!');
    }
}
