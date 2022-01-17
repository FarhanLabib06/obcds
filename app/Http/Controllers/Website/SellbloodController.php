<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sellblood;

class SellbloodController extends Controller
{
    public function sellblood()
    {
        return view('website.layout.sellblood');
    }
    public function submitsell(Request $request)
    {
        // dd($request->all());
        sellblood::create([
            'user_id'=>$request->user_id,
            'amount' =>$request->amount,
            'blood_type'=>$request->blood_type
        ]);
        return redirect()->back();
    }
}
