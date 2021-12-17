<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feedback;


class FeedbackController extends Controller
{
    public function feedback()
    {
        $feedback=feedback::all();
        return view('admin.layout.feedback',compact('feedback'));
    }
     
}
