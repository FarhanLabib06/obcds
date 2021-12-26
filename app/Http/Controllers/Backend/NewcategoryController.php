<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bloodtype;

class NewcategoryController extends Controller
{
    public function newcategory()
    {
        return view('admin.layout.addbloodcategory');
    }
    public function newstore(Request $request)
    {

        //edd($request->all());
        $request->validate([
            'group'=>'required',
        ]);
        
        bloodtype::create([
            
            'Blood_group'=>$request->group,
       ]);
        return redirect()->back();
    }
}
