<?php

namespace App\Http\Controllers;

use Illuminate\Http\ContactRequest;

class ContactController extends Controller
{
    public function getForm(){
      return view('contact');
    }

    public function postForm(ContactRequest $request)
    {
      Mail::send('emailContact', $request->all(), function($message)
      {
        $message->to('q.vilcoque@gmail.com')->subject('Contact');
      });

      return view('confirm');
    }
}
