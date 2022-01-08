@extends('website.master')
@section('content')

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
           
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->


            

        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">User Profile</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>

                    <form class="form" action="#" method="post" id="registrationForm">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>name</h4></label>
                                <input  value="{{$user->name}}" type="text" class="form-control" name="first_name"
                                       id="first_name" placeholder="name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email"><h4>email</h4></label>
                                <input value="{{$user->email}}" type="text" class="form-control" name="last_name"
                                       id="last_name" placeholder="email" title="enter your last name if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input value="{{$user->phone}}" type="text" class="form-control" name="phone" id="phone"
                                       placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="inputAddress"><h4>Address</h4></label>
                                <input value="{{$user->address}}" type="text" class="form-control" id="inputAddress"
                                       name="inputAddress" placeholder="enter address" title="enter your address if any.">
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="col-md-6">
                                <label for="inputCity"><h4>blood group</h4></label>
                                <input value="" type="text" class="form-control" id="inputCity"
                                       name ="inputCity" placeholder="enter blood group" title="enter your city.">
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="inputCity"><h4>Role</h4></label>
                                <input value="{{$user->role}}" type="text" class="form-control" id="inputCity"
                                       name ="inputCity" placeholder="enter Role" title="enter your city.">
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit" href="#"><i
                                        class="glyphicon glyphicon-ok-sign"></i> Update
                                </button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </form>

                    <hr>

                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->



    


</body>
</html>
@endsection