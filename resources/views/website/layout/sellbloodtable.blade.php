@extends('website.master')
@section('content')

<h1>Blood Sells</h1>
<a class="btn btn-primary" href="{{route('view.sell.blood')}}" role="button">Sell Blood</a>
<table class="table table-striped">
  <thead>
     
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">User id</th>
      <th scope="col">Blood type</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">price</th>
      <th scope="col">status</th>
      
    </tr>
  </thead>
  <tbody>
       @foreach($sellblood as $key=>$y)
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{$y->user_id}}</td>
      <td>{{$y->blood_type}}</td>
      <td>{{$y->amount}}</td>
      <td>{{$y->date}}</td>
      <td>{{$y->price}}</td>
      <td>{{$y->status}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
















@endsection