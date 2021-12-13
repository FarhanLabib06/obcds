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
                                        </tr>
                                    </thead>
                                    @foreach($userdata as $key=>$a)
                                             <tr>
                                            <td>{{($a->$key+1)}}</td>
                                            <td>{{($a->name)}}</td>
                                            <td>{{($a->gender)}}</td>
                                            <td>{{($a->email)}}</td>
                                            <td>{{($a->blood_type)}}</td>
                                            <td>{{($a->role)}}</td>
                                            <td>{{($a->address)}}</td>
                                            <td>{{($a->phone)}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>







@endsection