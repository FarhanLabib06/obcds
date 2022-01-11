@extends('website.master')
@section('content')
  @php
    $available =0;
  @endphp
 <table class="table table-striped">
     <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                 Blood list
                            </div>
                             
  <thead>
    <tr>
      <th>serial no</th>
      <th>Blood group</th>
      <th>Collection date</th>
      <th>Expire date</th>
      <th>Availability</th>
      <th>Amount</th>
      <!-- <th>In stock</th> -->
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($list as $key=>$g)
    <tr>
      <td>{{($g->$key+1)}}</td>
      <td>{{($g->bloodcategory->blood_group)}}</td>
      <td>{{($g->collection_date)}}</td>
      <td>{{($g->expire_date)}}</td>
      <td>{{($g->availability)}}</td>
      <td>{{($g->in_stock)}}</td>
      @php 
        $data = $g->in_stock;
        $available = $data + $available;
      @endphp
      <!-- <td>{{($g->in_action)}}</td> -->
      <td>
        <a  class="btn btn-outline-primary" href="{{route('blood.request',$g->id)}}">Request</a>
       </td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                 <a class=""></a>
                                 In Stock {{$available}}
                            </div>
@endsection