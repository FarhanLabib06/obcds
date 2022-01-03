<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\add_new_stock;
use App\Models\bloodrequest;

class RequestController extends Controller
{
    public function request($id)
    {
        // dd($id);
        $stock= add_new_stock::find($id);
        // dd($stock);
        return view('website.layout.request',compact('stock'));
    }
    public function dorequest(Request $request)
    {
        
        //dd($request->all());
         bloodrequest::create([
            'user_id'=>$request->user_id,
            'stock_id'=>$request->stock_id,
            'amount'=>$request->amount
        ]);
        return redirect()->back();
        
    }
    
}
