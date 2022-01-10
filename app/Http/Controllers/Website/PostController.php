<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Commnet;

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
    public function viewpost()
    {
        $post=Post::all();
        // dd($post);
        return view('website.layout.viewpost',compact('post'));
    }
    public function comment($id)
    {
        // dd($id);
        $post = Post::find($id);
        // dd($post->id);
        return view('website.layout.comment',compact('post'));
    }
    public function docomment(Request $request,$id)
    {
        // dd($id);
        // dd($request->all());
        $user = auth()->user()->id;
        Commnet::create([
            'new_comment'=>$request->text,
            'post_id'=>$id,
            'user_id'=>$user,
            'like'=>$request->like,
            'reply'=>$request->reply,
        ]);
        return redirect()->back();
            
    }

}
