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
                                            <th>Stock_id</th>
                                            <th>Blood_group</th>
                                            <th>Collection_date</th>
                                            <th>Expire_date</th>
                                            <th>availability</th>
                                            <th>In_stock</th>
                                            <th>Donor_name</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($stock as $b)

                                        <tr>
                                            <td>{{($b->id)}}</td>
                                            <td>{{($b->blood_group)}}</td>
                                            <td>{{($b->collection_date)}}</td>
                                            <td>{{($b->expire_date)}}</td>
                                            <td>{{($b->availability)}}</td>
                                            <td>{{($b->in_stock)}}</td>
                                            <td>{{($b->donor_name)}}</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


@endsection