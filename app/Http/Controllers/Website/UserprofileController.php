<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function profile()
    {
        return view('website.layout.profile');
    }
}
