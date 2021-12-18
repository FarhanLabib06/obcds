@extends('admin.master')
@section('content')

<div class="card mb-4">
     <!-- <a class="btn btn-primary" href="{{route('addstock')}}" role="button">Add New Stock</a> -->
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                FeedBack
                            </div>
                            <div class="card-body">
                              
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Serial no</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Title</th>
                                            <th>Messege</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($feedback as $key=>$c)

                                        <tr>
                                            <td>{{($c->$key+1)}}</td>
                                            <td>{{($c->name)}}</td>
                                            <td>{{($c->email)}}</td>
                                            <td>{{($c->phone)}}</td>
                                            <td>{{($c->title)}}</td>
                                            <td>{{($c->messege)}}</td>
                                            <td>
                                                <a  class="btn btn-outline-primary" href="{{route('admin.feedbackview',$c->id)}}">view</a>
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>


@endsection