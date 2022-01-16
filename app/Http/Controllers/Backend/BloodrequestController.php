<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bloodrequest;

class BloodrequestController extends Controller
{
    public function bloodrequest()
    {
        $requestview=bloodrequest::all();
        return view('admin.layout.bloodrequest',compact('requestview'));
    }
    
    
}
