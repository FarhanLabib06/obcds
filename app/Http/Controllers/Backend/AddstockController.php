<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\add_new_stock;
use App\Models\bloodtype;

class AddstockController extends Controller
{
    public function addstock()
    {
        $categories = bloodtype::all();
        return view('admin.layout.addstock',compact('categories'));
    }
    public function store(Request $request)
    {

        //edd($request->all());
        $request->validate([
            'id'=>'required',
            'group'=>'required',
            'Collectiondate'=>'required',
            'Expiredate'=>'required',
            'availability'=>'required',
            'instock'=>'required',
            'id'=>'required',
        ]);
        
        add_new_stock::create([
            'Stock_number'=>$request->id,
            'Blood_group'=>$request->group,
            'Collection_date'=>$request->Collectiondate,
            'Expire_date'=>$request->Expiredate,
            'availability'=>$request->availability,
            'In_stock'=>$request->instock,
            'Donor_id'=>$request->id,
        ]);
        return redirect()->back()->with('message',' new stock added!');
    }
}
