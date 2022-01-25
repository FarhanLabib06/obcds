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
        $stock = add_new_stock::find($id);
        if ($stock->in_stock >= $request->amount) {
             $bloodrequest=bloodrequest::create([
                'user_id'=>$request->user_id,
                'stock_id'=>$request->stock_id,
                'amount'=>$request->amount
            ]);
            $decrease= add_new_stock::where('id',$id)->decrement('in_stock',$bloodrequest->amount);
            if ($stock->in_stock == 0) {
                $stock->update([
                    'availability'=>'not available'
                ]);
            return redirect()->route('blood.category');
            }
            return redirect()->route('blood.category');

        }else {
            if ($stock->in_stock == 0) {
                $stock->update([
                    'availability'=>'not available'
                ]);
            return redirect()->route('blood.category')->with('message','out of stock.');
            }
        }
        
            // dd($newamount);
        // dd($decrease);

        // add_new_stock::find($id)->update([
        //     'in_stock'=>$newamount
        // ]);
        
        // $newamount = 
        
    }
    
}
