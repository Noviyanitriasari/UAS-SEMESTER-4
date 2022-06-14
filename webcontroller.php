<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webcontroller extends Controller
{
    public function Official()
    {
        return view ('Official');
    }
    public function Us()
    {
        return view ('Us');
    }
    public function Contact()
    {
        return view ('Contact');
    }
}
