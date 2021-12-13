@extends('website.master')
@section('content')

<!-- Login Start -->
    <section id="login">
        <div class="container">
                <img src="{{url('website/imgs/logo.png')}}" alt="">
                <form action="{{route('user.do.login')}}" method="post">
                    @csrf
                    <input name="email" class="" type="email" placeholder="email" required style="width:70%; font-size: 20px; height: 50px; display: block; margin: 30px 0px 0px 0px; margin-left: auto; margin-right: auto; border: 1px solid lightgray; padding-left: 10px; border-radius: 5px;">
                    <input name="password"class="password" type="password" placeholder="password" required>
                    <input class="check" type="checkbox">Remember me
                    <a href="#">Forget Password ?</a><br>
                    <div class="reg-group">
                        <button style="background-color: darkred;">Login</button>
                        <!-- <button style="background-color: rgb(51, 58, 65);"href="{{route('register')}}">Make new account</button> -->
                    </div>
                </form>
        </div>
    </section>
    <!-- Login End -->

@endsection