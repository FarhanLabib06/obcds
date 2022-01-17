@extends('website.master')
@section('content')
<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/Backend/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/static/core/img/favicon.png" type="image/gif/png" sizes="16x16">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .row a button:hover {
            border: none;
        }
    </style>

</head>

<body>


<hr>
<div class="container bootstrap snippet">
    <div class="row" style="padding-bottom: 20px;">
        <div>
            <!-- <a href="{% url 'index' %}" style="text-decoration: none; color: white;">
                <button type="button" class="btn btn-success" style="position: absolute; font-weight: bold; right: 10%; background-color: #7fad39;">
                Go Back to Home</button>
            </a> -->
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->


            <!-- <div class="text-center">
                <img src="#" class="avatar img-circle img-thumbnail"
                     alt="avatar">
                <h4></h4>
            </div> -->

            <!-- <div class="panel panel-default">
                <div class="panel-heading" ><h4>Email: </h4><i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><h5></h5></div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><h4>Activity: </h4><i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><a href="{% url 'order_history' %}" style="text-decoration: none;"><h5>View Orders</h5></a></div>
            </div> -->

        </div><!--/col-3-->
        
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#">User Profile</a></li>
                @if(auth()->user()->role == 'donor')
                @if($candonate == true)
                <li class="active"><a style="color: #07b52a !important;" data-toggle="tab" href="#">Can Donate</a></li>
                @else
                <li class="active"><a style="color: #e80e0e !important;" data-toggle="tab" href="#">Can't Donate</a></li>
                @endif
                @endif
            </ul>
            

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>

                    <form class="form" action="{{route('do.update.profile',$user)}}" method="post" id="registrationForm">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>name</h4></label>
                                <input value="{{auth()->user()->name}} " type="text" class="form-control" name="first_name"
                                       id="first_name" placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email"><h4>email</h4></label>
                                <input value="{{auth()->user()->email}}" type="text" class="form-control" name="last_name"
                                       id="last_name" placeholder="last name" title="enter your last name if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input value="{{auth()->user()->phone}}" type="text" class="form-control" name="phone" id="phone"
                                       placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="inputAddress"><h4>Address</h4></label>
                                <input value="{{auth()->user()->address}}" type="text" class="form-control" id="inputAddress"
                                       name="inputAddress" placeholder="enter address" title="enter your address if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="inputCity"><h4>blood group</h4></label>
                                <input value="{{auth()->user()->blood_type}}" type="text" class="form-control" id="inputCity"
                                       name ="inputCity" placeholder="enter city name" title="enter your city.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="inputCity"><h4>Role</h4></label>
                                <input value="{{auth()->user()->role}}" type="text" class="form-control" id="inputCity"
                                       name ="inputCity" placeholder="enter city name" title="enter your city.">
                            </div>
                        </div>
                         @if(auth()->user()->role=='donor')
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="inputAddress2"><h4>Donation date</h4></label>
                                <input value="{{auth()->user()->donationdate}}" type="date" class="form-control" id="inputAddress2"
                                       name="donationdate" placeholder="enter state name" title="enter your address if any.">
                            </div>
                        </div>
                        @endif
                        
                        

                        <!-- <div class="form-group">
                            <div class="divcol-md-2 col-xs-6">
                                <label for="inputZip"><h4>Zip</h4></label>
                                <input value="" type="text" class="form-control" name="inputZip" id="inputZip">
                            </div>
                        </div> -->

                        <!-- <div class="form-group">
                            <div class="col-xs-6">
                                <label for="exampleFormControlFile1"><h4>Upload Photo</h4></label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i
                                        class="glyphicon glyphicon-ok-sign"></i> Update
                                </button>
                                 @if(auth()->user()->role=='donor')
                                 <a type="button" class="btn btn-success" href="{{route('view.sell.blood')}}">Sell Blood</a>
                                 @endif                                
                            </div>
                        </div>
                        

                    </form>
                    

                    <hr>

                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->
<div>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#"> Profile</a></li>
            </ul>
        </div>

<!-- <a href="" style="text-decoration: none; text-align: center;"
   title="Green Agro"><h3>Login to the site first</h3></a> -->
<div id="divToPrint">
<h1>Users Requests</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Stock_id</th>
      
      <th scope="col">Amount</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($bloodrequests as $key=>$bloodrequest)
    <tr>
      
      <td>{{$key+1}}</td>
      <td>{{$bloodrequest->stock_id}}</td>
      <td>{{$bloodrequest->amount}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>
    


</body>
</html>


















@endsection