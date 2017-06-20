<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact");
    }

    public function store()
    {
        $this->validate(\request(), [
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "message" => "required",
        ]);

        $contact = new Contact(\request(['name', 'email', 'subject', 'message']));

        $contact->save();

        return view('contact-submit');
    }
}
