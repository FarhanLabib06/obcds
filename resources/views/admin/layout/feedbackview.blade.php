@extends('admin.master')
@section('content')

    <h1>Feedback Details</h1>

    
<p>Name: {{$feedback->name}}</p>
<p>Email: {{$feedback->email}}</p>
<p>Phone: {{$feedback->phone}}</p>
<p>Title: {{$feedback->title}}</p>
<p>Messege: {{$feedback->messege}}</p>

<!-- 
    <lable>Feedback info:</lable>
    <input type="text" class="form-control" value="{{$feedback->name}}">
    <input type="file" class="form-control"> --> 







@endsection