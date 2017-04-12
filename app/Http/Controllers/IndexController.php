<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //index Controller
    public function index()
    {
        return view('layouts.index');
    }
}
