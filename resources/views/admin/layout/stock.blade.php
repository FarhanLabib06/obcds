@extends('admin.master')
@section('content')


 <div class="card mb-4">
     <a class="btn btn-primary" href="{{route('addstock')}}" role="button">Add New Stock</a>
    <div class="card" id="printableArea">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Stock list
                            </div>
                            <div class="card-body">
                              
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>serial no</th>
                                            <th>Stock number</th>
                                            <th>Blood group</th>
                                            <th>Collection date</th>
                                            <th>Expire date</th>
                                            <th>Availability</th>
                                            <th>In stock</th>
                                            <th>Delete</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($stock as $key=>$b)

                                        <tr>
                                            <td>{{($key+1)}}</td>
                                            <td>{{($b->stock_number)}}</td>
                                            <td>{{(optional($b->bloodcategory)->blood_group)}}</td>
                                            <td>{{($b->collection_date)}}</td>
                                            <td>{{($b->expire_date)}}</td>
                                            <td>{{($b->availability)}}</td>
                                            <td>{{($b->in_stock)}}</td>
                                            
                                            <td>
                                                <a  class="btn btn-outline-primary" href="{{route('stock.delete',$b->id)}}">Delete</a>
                                            </td>
                                            <td>
                                                <a  class="btn btn-outline-primary" href="{{route('stock.update.view',$b->id)}}">Update</a>
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
  