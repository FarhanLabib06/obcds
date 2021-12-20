<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminloginController extends Controller
{
    public function login()
    {
        return view('admin.adminlogin');
    }
    public function doLogin(Request $request){
        //dd($request->all());
        $userpost=[
            'email'=>$request->email,
            'password'=>$request->password,
            
        ];
        //  dd($userpost);
        //    dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            //dd("true");
            return redirect()->route('test');
        }
        else
        return redirect()->route('admin.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
