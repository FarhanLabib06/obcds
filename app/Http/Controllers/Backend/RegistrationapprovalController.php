<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegistrationapprovalController extends Controller
{
    public function approve()
    {
        $userdata=User::all();
        return view('admin.layout.registerapproval',compact('userdata'));
    }

}
