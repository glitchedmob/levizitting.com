<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function index(Contact $contacts)
    {
        $contacts = Contact::latest()
            ->get();

        return view("admin.contact.index", compact("contacts"));
    }

    public function show(Contact $contact)
    {
        return view("admin.contact.show", compact("contact"));
    }
}
