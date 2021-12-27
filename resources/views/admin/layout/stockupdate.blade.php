@extends('admin.master')
@section('content')

<form action="{{route('stock.update',$stock->id)}}" method="post">
  @method('PUT')
  @csrf
  <div>
    <label for="exampleInputEmail1" class="form-label">Blood_group</label>
    <input name="group" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Collection_date</label>
    <input name="Collectiondate" required type="date" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Expire_date</label>
    <input name="Expiredate" required type="date" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">availability</label>
    <input name="availability" required type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">In_stock</label>
    <input name="instock" reuired type="digit" class="form-control" id="exampleInputPassword1">
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Donor_id</label>
    <input name="id" required type="text" class="form-control" id="exampleInputPassword1">
  </div> -->
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection