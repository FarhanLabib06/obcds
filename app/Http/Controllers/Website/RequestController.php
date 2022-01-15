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
        // dd($request->all());
        // $newamount=0;
        $id = $request->stock_id;
        // dd($decrease);
        // $currentamount = $decrease->in_stock;
        // $requestedAmmount = $request->amount;
        // if ($currentamount >= $requestedAmmount) {
        //     $newamount = $currentamount-$requestedAmmount;
        //     // dd($newamount);
        // }
         $bloodrequest=bloodrequest::create([
            'user_id'=>$request->user_id,
            'stock_id'=>$request->stock_id,
            'amount'=>$request->amount
        ]);
            // dd($newamount);
        // dd($decrease);
        $decrease= add_new_stock::where('id',$id)->decrement('in_stock',$bloodrequest->amount);

        // add_new_stock::find($id)->update([
        //     'in_stock'=>$newamount
        // ]);
        
        // $newamount = 
        return redirect()->back();
        
    }
    
}
