@extends('admin.master')
@section('content')

<form action="{{route('stock.update',$stock->id)}}" method="post">
  @method('PUT')
  @csrf
  <div class="form-group">
    <label for="exampleFormControlSelect1">Blood Group</label>
    <select name="group" class="form-control" id="exampleFormControlSelect1">
      @foreach($bloodgroup as $group)
      <option value = "{{$group->id}}">{{$group->blood_group}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Collection_date</label>
    <input name="Collectiondate" value="{{$stock->Collectiondate}}" required type="date" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Expire_date</label>
    <input name="Expiredate" value="{{$stock->Expiredate}}" required type="date" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">availability</label>
    <input name="availability" value="{{$stock->availability}}" required type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">In_stock</label>
    <input name="instock" value="{{$stock->instock}}" reuired type="digit" class="form-control" id="exampleInputPassword1">
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Donor_id</label>
    <input name="id" required type="text" class="form-control" id="exampleInputPassword1">
  </div> -->
  
  
  <button type="submit" class="btn btn-primary"href="{{route('stock.update',$stock->id)}}">Submit</button>
</form>
@endsection