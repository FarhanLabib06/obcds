<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Commnet;
use Carbon\Carbon;

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
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->back()->with('message','Post created.');
    }
    public function viewpost()
    {
        $now = Carbon::now();

        $post=Post::with('user')->get();
        // dd($post);
        foreach($post as $key => $dpost){
            $delete_post = $dpost->created_at;
            // dd($delete_post);
            $comments = Commnet::where('post_id',$dpost->id)->get();
            $diffInHoure = Carbon::parse($delete_post);
            // dd($diffInHoure);
            $length = $diffInHoure->diffInHours($now);
            // dd($length);
            if($length>=4){
                foreach ($comments as $key => $comment) {
                    $comment->delete();
                }
                $dpost->delete();
                return redirect()->back();
            }
            // else{
            //     return redirect()->back()->with('error','no posts updated');
            // }
        }
        return view('website.layout.viewpost',compact('post'));
    }
    public function comment($id)
    {
        // dd($id);
        $post = Post::find($id);
        // dd($post->id);
        $comment = Commnet::with('user')->get();
        // dd($comment);
        return view('website.layout.comment',compact('post','comment'));
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
