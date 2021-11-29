<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <!-- website font  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{url('website/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('website/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('website/css/style.css')}}" />

    <title>Blood Bank</title>
</head>

<body>

   @include('website.partials.navbar')
   @include('website.partials.header')
   @yield('content')

    
 
    @include('website.partials.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{url('website/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{url('website/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{url('website/js/main.js')}}"></script>
</body>

</html>