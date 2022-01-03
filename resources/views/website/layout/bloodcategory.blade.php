@extends('website.master')
@section('content')

<h2>Blood Category</h2>
<br>
<div class="row">
  <div class="col-sm-6">
    @foreach($bloodcategory as $category)
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$category->blood_group}}</h5>
        <p class="card-text">click to see details.</p>
        <a href="{{route('blood.list',$category->id)}}" class="btn btn-primary">Details</a>
      </div>
    </div>
    @endforeach
  </div>
  <br>
@endsection