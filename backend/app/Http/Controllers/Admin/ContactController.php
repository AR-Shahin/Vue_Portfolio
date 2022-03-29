<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        return view('Backend.contact.index');
    }

    public function all()
    {
        return Contact::latest()->get();
    }
    public function view(Contact $contact)
    {
        return $contact;
    }
}
