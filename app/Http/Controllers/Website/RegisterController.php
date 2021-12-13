<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('website.layout.register');
    }
    public function doRegistration(Request $request)
    {
    //dd($request->all());
    User::create([
        'name'=>$request->name,
        'gender'=>$request->type,
        'email'=>$request->email,
        'blood_type'=>$request->blood_type,
        'address'=>$request->Gov,
        'phone'=>$request->phone,
        'password'=>bcrypt($request->password),
    ]);
    return redirect()->back();
}



    
}
