<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feedback;

class ContactusController extends Controller
{
    public function contact()
    {
        return view('website.layout.contactus');
    }
    public function feedbacksubmit(Request $request)
    {
        feedback::create([
            'name'=>$request->input('name'),
            'email'=>$request->email,
            'phone'=>$request->input('phone'),
            'title'=>$request->input('title'),
            'messege'=>$request->input('messege'),
        ]);
        return redirect()->back();

    }

}
