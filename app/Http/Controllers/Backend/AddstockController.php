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

        //edd($request->all());
        add_new_stock::create([
            'Stock_number'=>$request->id,
            'Blood_group'=>$request->group,
            'Collection_date'=>$request->Collectiondate,
            'Expire_date'=>$request->Expiredate,
            'availability'=>$request->availability,
            'In_stock'=>$request->instock,
            'Donor_id'=>$request->id,
        ]);
        return redirect()->back();
    }
}
