<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('website.layout.home');  
    }
    public function aboutus()
    {
        return view('website.layout.aboutus');
    }
    public function whoweare()
    {
        return view('website.layout.whoarewe');
    }
}
