@extends('admin.master')
@section('content')


 <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               User list
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
                                            <th>Role</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Active</th>
                                            <th>Approve</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    @foreach($userdata as $key=>$a)
                                             <tr>
                                            <td>{{($key+1)}}</td>
                                            <td>{{($a->name)}}</td>
                                            <td>{{($a->gender)}}</td>
                                            <td>{{($a->email)}}</td>
                                            <td>{{($a->blood_type)}}</td>
                                            <td>{{($a->role)}}</td>
                                            <td>{{($a->address)}}</td>
                                            <td>{{($a->phone)}}</td>
                                            <td>{{($a->active)}}</td>
                                            <td>
                                                <a  class="btn btn-outline-primary" href="{{route('user.approve',$a->id)}}">Approve</a>
                                            </td>
                                             <td>
                                                <a  class="btn btn-outline-primary" href="{{route('user.delete',$a->id)}}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>















@endsection