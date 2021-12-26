<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function postcreate()
    {
        return view('website.layout.post');
    }
    public function dopost(Request $request)
    {
        Post::create([
            'title'=>$request->input('title'),
            'messege'=>$request->input('messege'),
        ]);
        return redirect()->back();
    }
}
