<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonorloginController extends Controller
{
    public function donorlogin()
    {
        return view('website.layout.donorlogin');
    }
    public function doLogin(Request $request){
        //dd($request->all());
        $userpost=[
            'email'=>$request->email,
            'password'=>$request->password,
            
        ];
         //dd($userpost);
        //    dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            //dd("true");
            // dd(auth()->user());
            if (auth()->user()->active == 1) {
                return redirect()->route('home')->with('message','login successfull.');
            } else {
                Auth::logout();
                return redirect()->back()->with('error','wait for approval.');
            }
            
            
        }
        else
        return redirect()->route('donorlogin');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('message','Logging out.');
    }
}
