<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecipentloginController extends Controller
{
    public function recipentlogin()
    {
        return view('website.layout.recipentlogin');
    }
}
