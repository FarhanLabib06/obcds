<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bloodrequest;
use App\Models\User;
class UserprofileController extends Controller
{
    public function profile()
    {
        $user = auth()->user()->id;
        // dd($user);
        $bloodrequests = bloodrequest::where('user_id',$user)->get();
        // dd($bloodrequests);
        // dd();
        return view('website.layout.profile',compact('bloodrequests','user'));
    }
    public function profileup($id)
    {
        dd($id);
        return view('website.layout.updateprofile');
    }
    public function profileupdate(Request $request,$id)
    {
        $user=User::find($id);
        // dd($request->all());
        $user->update([
            // field name from db || field name from form
            'name'=>$request->first_name,
            'email'=>$request->last_name,
            'address'=>$request->inputAddress,
            'phone'=>$request->phone,
            'role'=>$request->inputCity,
        ]);
         return redirect()->route('profile.view')->with('success','stock Updated Successfully.');

    }
}
