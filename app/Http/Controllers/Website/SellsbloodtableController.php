<?php

namespace App\Http\Controllers\website;

use App\Models\sellblood;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellsbloodtableController extends Controller
{
    public function sellstable()
    {
        $sellblood=sellblood::all();
        return view("website.layout.sellbloodtable",compact('sellblood'));
    }
}
