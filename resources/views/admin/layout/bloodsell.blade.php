@extends('admin.master')
@section('content')

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
    <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif

 <div class="card mb-4">
         
<div class="card" id="printableArea">
                            <div class="card-header" >
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
                                            <th>status</th>
                                            <th>Approve</th>
                                            <th>Delete</th>
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
                                            <td>{{($x->status)}}</td>
                                            
                                            
                                            <td>
                                                <a  class="btn btn-outline-primary" href="{{route('blood.sale.approve',$x->id)}}">Approve</a>
                                            </td>
                                            <td>
                                                <a  class="btn btn-outline-primary" href="{{route('blood.sale.delete',$x->id)}}">Delete</a>
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
</div>
                        
</div>

      
        
        <a href="#" class="btn btn-primary" onclick="printDiv('printableArea')">Print</a>

   




    







  <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>





@endsection


