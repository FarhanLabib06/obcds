<?php

namespace App\Http\Controllers\Backend;

use App\Models\sellblood;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BloodsellviewController extends Controller
{
    public function bloodsellview()
    {
        $bloodsaleview=sellblood::all();
        return view('admin.layout.bloodsell',compact('bloodsaleview'));
    }
}
