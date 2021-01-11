<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function signup()
    {
        return view('frontend.layouts.signup');
    }
    public function signin()
    {
        return view('frontend.layouts.signin');
    }
}
