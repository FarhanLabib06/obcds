<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function test(){
        return view('admin.layout.home');
    }
    
    public function recipentlist()
    {
        return view('admin.layout.Recipentlist');
    }
}
