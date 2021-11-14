<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddstockController extends Controller
{
    public function addstock()
    {
        return view('admin.layout.addstock');
    }
}
