@extends('admin.master')
@section('content')

  <div class="card mb-4">
     <a class="btn btn-primary" href="{{route('new.blood.cat')}}" role="button">New Category</a>
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Blood category
                            </div>
                            <div class="card-body">
                              
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>serial no</th>
                                            <th>Blood group</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($cat as $key=>$d)

                                        <tr>
                                            <td>{{($key+1)}}</td>
                                            <td>{{($d->blood_group)}}</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection