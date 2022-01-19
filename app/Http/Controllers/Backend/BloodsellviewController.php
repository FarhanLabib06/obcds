<?php

namespace App\Http\Controllers\Backend;

use App\Models\sellblood;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BloodsellviewController extends Controller
{
    public function bloodsellview()
    {
        $bloodsaleview=sellblood::all();
        return view('admin.layout.bloodsell',compact('bloodsaleview'));
    }
    public function approve($id)
    {
        // dd($id);
        $data=sellblood::find($id)->update([
            'status'=>'approved'
        ]);
       
       return redirect()->back()->with('success','Approved.');
    }
    public function delete($id)
    {
       sellblood::find($id)->delete();
       return redirect()->back()->with('success','Declined.');
    }

}
