<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Models\feedback;
use App\Models\sellblood;
use App\Models\bloodrequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function test(){
        $count['users']=User::all()->count();
        $count['blood_requests']=bloodrequest::all()->count();
        $count['feedback']=feedback::all()->count();
        $count['sells_blood']=sellblood::all()->count();

        return view('admin.layout.home',compact('count'));
    }
    
    public function recipentlist()
    {
        return view('admin.layout.Recipentlist');
    }
}
