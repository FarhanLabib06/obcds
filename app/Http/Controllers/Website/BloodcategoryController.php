<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\add_new_stock;
use App\Models\bloodtype;

class BloodcategoryController extends Controller
{
    public function bloodcategory()
    {
        
        $bloodcategory=bloodtype::all();
        //dd($bloodcategory);
        return view('website.layout.bloodcategory',compact('bloodcategory'));
    }
    public function viewlist($id)
    {
        //dd($id);
        $list=add_new_stock::with('bloodcategory')->where('blood_group',$id)->get();
        return view('website.layout.viewbloodcategory',compact('list'));
    }
}
