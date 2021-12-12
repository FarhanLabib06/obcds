@extends('website.master')
@section('content')

<!-- Login Start -->
    <section id="login">
        <div class="container">
                <img src="{{url('website/imgs/logo.png')}}" alt="">
                <form action="{{route('user.do.login')}}" method="post">
                    @csrf
                    <input name="email" class="email" type="email" placeholder="email" required>
                    <input name="password"class="password" type="password" placeholder="password" required>
                    <input class="check" type="checkbox">Remember me
                    <a href="#">Forget Password ?</a><br>
                    <div class="reg-group">
                        <button style="background-color: darkred;">Login</button>
                        <button style="background-color: rgb(51, 58, 65);">Make new account</button>
                    </div>
                </form>
        </div>
    </section>
    <!-- Login End -->

@endsection