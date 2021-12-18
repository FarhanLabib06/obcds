<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BloodcategoryController extends Controller
{
    public function bloodcategory()
    {
        return view('website.layout.bloodcategory');
    }
}
