<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\add_new_stock;

class AddstockController extends Controller
{
    public function addstock()
    {
        return view('admin.layout.addstock');
    }
    public function store(Request $request)
    {

        //dd($request->all());
        add_new_stock::create([
            'Stock_id'=>$request->id,
            'Blood_group'=>$request->group,
            'Collection_date'=>$request->Collectiondate,
            'Expire_date'=>$request->Collectiondate,
            'availability'=>$request->availability,
            'In_stock'=>$request->instock,
            'Donor_name'=>$request->name,
        ]);
        return redirect()->back();
    }
}
