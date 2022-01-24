@extends('website.master')
@section('content')

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

<section id="contact">
        <div class="container">
            
                <div class="col-md-6 info">
                    <div class="title">Create Post</div>
                    <form action="{{route('post.done')}}" method="post">
                        @csrf
                        <input type="text" name="title" id="" placeholder="Title" required="">
                        <input type="text" name="messege" id="" placeholder="Messege" required="">
                        <div class="reg-group">
                            <button type="submit">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>









@endsection