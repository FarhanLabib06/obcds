@extends('admin.master')
@section('content')

 <div class="card mb-4">
     
    <div id="divToPrint">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Report 
                            </div>
                            <div>
    <form>
        <div class="input-group rounded mt-3 mb-2">
            <input type="date" class="form-control rounded" value="{{request()->from_date}}" name="from_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <input type="date" class="form-control rounded" value="{{request()->to_date}}" name="to_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
    <button type="submit">submit</button>
  </span>
        </div>
    </form>
</div>
                            <div class="card-body">
                              
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>serial</th>
                                            <th>user id</th>
                                            <th>stock id</th>
                                            <th>Blood id</th>
                                            <th>ammount</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          
                                            
                                            
                                        </tr>
                                       
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