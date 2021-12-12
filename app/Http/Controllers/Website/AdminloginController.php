<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminloginController extends Controller
{
    public function adminlogin()
    {
        return view('website.layout.adminlogin');
    }
}
