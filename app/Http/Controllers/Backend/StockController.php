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
     public function stockdelete($id)
    {
       // dd($id);
       add_new_stock::find($id)->delete();
       return redirect()->back()->with('success','Stock Deleted.');
    }
    public function updateview($id)
    {
        $stock=add_new_stock::find($id);
        // dd($stock);
        return view('admin.layout.stockupdate',compact('stock'));
    }
    public function stockupdate(Request $request,$id)
    {

       
        $stock=add_new_stock::find($id);

//        Product::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);

//         $image_name=$product->image;
// //              step 1: check image exist in this request.
//         if($request->hasFile('product_image'))
//         {
//             // step 2: generate file name
//             $image_name=date('Ymdhis') .'.'. $request->file('product_image')->getClientOriginalExtension();

//             //step 3 : store into project directory

//             $request->file('product_image')->storeAs('/products',$image_name);

//         }


        $stock->update([
            // field name from db || field name from form
            'Blood_group'=>$request->group,
            'Collection_date'=>$request->Collectiondate,
            'Expire_date'=>$request->Expiredate,
            'availability'=>$request->availability,
            'In_stock'=>$request->instock,
            

        ]);
        return redirect()->route('admin.stock')->with('success','stock Updated Successfully.');
    }
}
