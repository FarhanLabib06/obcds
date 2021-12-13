<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function userlist()
    {
        $userdata=User::all();
        return view('admin.layout.userlist',compact('userdata'));
    }
}
