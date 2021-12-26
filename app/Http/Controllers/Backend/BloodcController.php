<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bloodtype;

class BloodcController extends Controller
{
    public function bloodcat()
    {
        $cat=bloodtype::all();

        return view('admin.layout.bloodcategory',compact('cat'));
    }
    public function category()
    {
        // dd("ok");
        $cat=bloodtype::all();
        
        return view('admin.Layout.bloodcategory',compact('cat'));
    }
}
