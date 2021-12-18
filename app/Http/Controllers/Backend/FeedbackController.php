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
    public function feedbackview($id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $feedback=feedback::find($id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layout.feedbackview',compact('feedback'));
    }

     
}
