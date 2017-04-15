<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function create()
    {
        return view('contactForm.contact');
    }

    public function store()
    {
    }
}
