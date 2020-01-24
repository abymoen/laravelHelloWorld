<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellowordController extends Controller
{
    function aboutUs() {
        return view('aboutus');
    }

    function home() {
        return view('home');
    }
}
