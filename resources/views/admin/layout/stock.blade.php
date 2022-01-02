@extends('admin.master')
@section('content')

 <div class="card mb-4">
     <a class="btn btn-primary" href="{{route('addstock')}}" role="button">Add New Stock</a>
    <div id="divToPrint">
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
                                            <td>{{($b->$key+1)}}</td>
                                            <td>{{($b->stock_number)}}</td>
                                            <td>{{($b->blood_group)}}</td>
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
<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>

                    
@endsection
  <script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/Backend/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>