<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bloodrequest;
class UserprofileController extends Controller
{
    public function profile()
    {
        $user = auth()->user()->id;
        // dd($user);
        $bloodrequests = bloodrequest::where('user_id',$user)->get();
        // dd($bloodrequests);
        // dd();
        return view('website.layout.profile',compact('bloodrequests'));
    }
}
