@extends('website.master')
@section('content')
<!-- Login Start -->
    <section id="login">
        <div class="container">
                <img src="{{url('website/imgs/logo.png')}}" alt="">
                <form action="submit">
                    @csrf
                    <input class="username" type="Username" placeholder="Username" required>
                    <input class="password" type="Password" placeholder="Password" required>
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