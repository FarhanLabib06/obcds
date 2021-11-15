<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\add_new_stock;

class StockController extends Controller
{
    public function stock()
    {
        $stock=add_new_stock::all();
        

        return view('admin.Layout.stock',compact('stock'));
    }
}
