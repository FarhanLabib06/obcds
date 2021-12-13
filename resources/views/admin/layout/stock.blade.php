@extends('admin.master')
@section('content')

 <div class="card mb-4">
     <a class="btn btn-primary" href="{{route('addstock')}}" role="button">Add New Stock</a>
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Stock list
                            </div>
                            <div class="card-body">
                              
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>serial no</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Blood group</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>D_id</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($stock as $key=>$b)

                                        <tr>
                                            <td>{{($b->$key+1)}}</td>
                                            <td>{{($b->stock_number)}}</td>
                                            <td>{{($b->blood_group)}}</td>
                                            <td>{{($b->collection_date)}}</td>
                                            <td>{{($b->expire_date)}}</td>
                                            <td>{{($b->availability)}}</td>
                                            <td>{{($b->in_stock)}}</td>
                                            <td>{{($b->donor_id)}}</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


@endsection