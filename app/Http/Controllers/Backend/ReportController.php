<?php

namespace App\Http\Controllers\Backend;

use App\Models\bloodrequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        $from = $request->query('from_date');
            $to = $request->query('to_date');
            $request = [];
            if($from && $to){
                // dd('ok');

            $requestview=bloodrequest::whereBetween('date',[$from,$to])->get();
            //   dd($problem);
            //   return view('admin.layout.report',compact('requestview'));
            }
            // return view('admin.layout.report',compact('requestview'));
    }
        
        
    
}
