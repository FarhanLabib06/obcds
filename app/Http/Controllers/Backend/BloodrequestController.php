<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BloodrequestController extends Controller
{
    public function bloodrequest()
    {
        return view('admin.layout.bloodrequest');
    }
}
