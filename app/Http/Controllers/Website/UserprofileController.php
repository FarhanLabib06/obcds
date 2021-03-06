<?php

namespace App\Http\Controllers\Website;

use Carbon\Carbon;
use App\Models\User;
use App\Models\sellblood;
use App\Models\bloodrequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserprofileController extends Controller
{
    public function profile()
    {
        // dd("in");
        $user = auth()->user()->id;
        // dd($user);
        $bloodrequests = bloodrequest::where('user_id',$user)->get();
        // dd($bloodrequests);
        // dd();
        if (auth()->user()->role == 'donor') {

            $status = sellblood::where('user_id',$user)->get();
            // dd($status);

             $candonate = false;
            $now = Carbon::now();

            // dd(auth()->user());
            $ddate = auth()->user()->donationdate;
            // dd($ddate);
            $diffInHours = Carbon::parse($ddate);
            $length = $diffInHours->diffInHours($now);
            // dd($length);
            if($length>2160) {
                $candonate = true;
                return view('website.layout.profile',compact('bloodrequests','user','candonate','status'));
            }
            else {
                return view('website.layout.profile',compact('bloodrequests','user','candonate','status'));
                
            }
        } else {
            return view('website.layout.profile',compact('bloodrequests','user'));
            
        }
        
       


    

    }
    public function profileup($id)
    {
        // dd($id);
        return view('website.layout.updateprofile');
    }
    public function profileupdate(Request $request,$id)
    {
        // dd($request->all());
        $user=User::find($id);
        // dd($request->all());
        $user->update([
            // field name from db || field name from form
            'name'=>$request->first_name,
            'email'=>$request->last_name,
            'address'=>$request->inputAddress,
            'phone'=>$request->phone,
            'role'=>$request->inputCity,
            'donationdate'=>$request->donationdate
        ]);
         return redirect()->route('profile.view')->with('success','profile Updated Successfully.');

    }
    // public function donationdate()
    // {
    //     $candonate = false;
    //     $now = Carbon::now();

    //     $ddate = User::all();

    //     foreach($ddate as $key => $date){
    //         $donation_date = $date->donatiodate;

    //         $diffInHours = Carbon::parse($donation_date);
    //         $length = $diffInHours->diffInHours($now);

    //         // if($length>2160) {
    //         //     $date->
    //         // }
    //     }
    // }
}
