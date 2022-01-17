@extends('admin.master')
@section('content')

 <div class="card mb-4">
     
    <div id="divToPrint">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Blood sell List
                            </div>
                            <div class="card-body">
                              
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>serial no</th>
                                            <th>user id</th>
                                            <th>amount</th>
                                            <th>blood type</th>
                                            <th>date</th>
                                            <th>price</th>
                                            <th>Delete</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                       @foreach($bloodsaleview as $key=>$x)

                                        <tr>
                                            <td>{{($key+1)}}</td>
                                            <td>{{($x->user_id)}}</td>
                                            <td>{{($x->amount)}}</td>
                                            <td>{{($x->blood_type)}}</td>
                                            <td>{{($x->date)}}</td>
                                            <td>{{($x->price)}}</td>
                                            
                                            
                                            <td>
                                                <a  class="btn btn-outline-primary" href="#">Delete</a>
                                            </td>
                                            <td>
                                                <a  class="btn btn-outline-primary" href="#">Update</a>
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
</div>















@endsection