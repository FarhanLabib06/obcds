@extends('website.master')
@section('content')
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif
<section id="sign-up">
        <div class="container">
                <img src="{{url('website/imgs/logo.png')}}" alt="">
                <form action="{{route('blood.dorequest')}}" method='post'>
                    @csrf
                    <input hidden value="{{auth()->user()->id}}" name="user_id" type="text" placeholder="Name" required>
                    <input hidden value="{{$stock->id}}" name="stock_id" type="text" placeholder="Name" required>
                    <input  name="amount" type="number" placeholder="Amount" required>
                    
                    
                    <!-- <select name="type" id="type" required="">
                        <option value="amount" disabled>Amount</option>
                        <option value="#"></option>
                        <option value="#"></option>
                    </select> -->

                    <!-- <input name="email" type="email" placeholder="Email" required>

                    <input type="date" name="bday" placeholder="Birth date"> 
                    <select name="Gov" id="Gov" required="">
                        <option value="Address" disabled>Address</option>
                        <option value="Uttara">Uttara</option>
                        <option value="Banani">Banani</option>
                        <option value="Gulshan">Gulshan</option>
                        <option value="Mirpur">Mirpur</option>
                        <option value="Rampura">Rampura</option>
                        <option value="Bashundhara">Bashundhara</option>
                    </select> -->
                    <div class="reg-group">
                        
                        <button class="submit" type="submit" href="{{route('blood.dorequest')}}" style="background-color: rgb(51, 58, 65);">Submit</button>
                    </div>
                </form>
        </div>
    </section>











@endsection