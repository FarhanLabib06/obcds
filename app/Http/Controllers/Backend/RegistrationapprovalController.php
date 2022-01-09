<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegistrationapprovalController extends Controller
{
    public function approve()
    {
        $userdata=User::where('active','0')->get();
        return view('admin.layout.registerapproval',compact('userdata'));
    }
    public function registrationdelete($id)
    {
       // dd($id);
       User::find($id)->delete();
       return redirect()->back()->with('success','User Deleted.');
    }

}
