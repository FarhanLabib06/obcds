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
        $userpost=$request->except('_token');
            // dd($userpost);
            dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            // dd("true");
            return redirect()->route('home');
        }
        else
        return redirect()->route('donorlogin');
    }
}
