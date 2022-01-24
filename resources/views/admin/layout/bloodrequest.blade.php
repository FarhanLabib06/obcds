@extends('admin.master')
@section('content')
<h1>Blood Request</h1>
 <div class="card mb-4">
     
    
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Stock list
                            </div>
                            <div class="card-body">
                              
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>serial</th>
                                            <th>user id</th>
                                            <th>stock id</th>
                                            <th>ammount</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                      @foreach($requestview as $key=>$v)
                                        <tr>
                                            <td>{{($key+1)}}</td>
                                            <td>{{($v->user_id)}}</td>
                                            <td>{{($v->stock_id)}}</td>
                                            <td>{{($v->amount)}}</td>
                                            
                                            
                                            
                                            
                                            <td>
                                                <a  class="btn btn-outline-primary" href="{{route('request.delete',$v->id)}}">Delete</a>
                                            </td>
                                            <!-- <td>
                                                <a  class="btn btn-outline-primary" href="#">Update</a>
                                            </td> -->
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        







@endsection
