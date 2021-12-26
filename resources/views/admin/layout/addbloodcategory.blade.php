@extends('admin.master')
@section('content')

<h1>Add New Stock</h1> 
@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="{{route('create.new')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Blood_group</label>
    <input name="group" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection