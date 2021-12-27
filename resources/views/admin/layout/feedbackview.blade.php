@extends('admin.master')
@section('content')
<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>
<div id="divToPrint">
    <h1>Feedback Details</h1>

    
<p>Name: {{$feedback->name}}</p>
<p>Email: {{$feedback->email}}</p>
<p>Phone: {{$feedback->phone}}</p>
<p>Title: {{$feedback->title}}</p>
<p>Messege: {{$feedback->messege}}</p>
</div>

<!-- 
    <lable>Feedback info:</lable>
    <input type="text" class="form-control" value="{{$feedback->name}}">
    <input type="file" class="form-control"> --> 







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
