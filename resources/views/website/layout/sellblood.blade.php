@extends('website.master')
@section('content')

    <section id="sign-up">
        <div class="container">
                <img src="{{url('website/imgs/logo.png')}}" alt="">
                <form action="{{route('submit.sell')}}" method='post'>
                    @csrf

                    
                    <input hidden value="{{auth()->user()->id}}" name="user_id" type="text" placeholder="Name" required>
                    <input name="amount" type="integer" placeholder="amount" required>

                    <!-- <input type="date" name="bday" placeholder="Birth date"> -->
                    <select name="blood_type" id="type" required="">
                        <option disabled>Blood Type</option>
                        <option value="A">A</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O">O</option>
                        <option value="O-">O-</option>
                        <option value="O+">O+</option>
                        <option value="AB+">AB+</option>
                    </select>
                    <input name="date" type="date" placeholder="date" required>
                    <input name="price" type="bigInteger" placeholder="price" required>
                    <div class="reg-group">
                        <button class="submit" type="submit" style="background-color: rgb(51, 58, 65);">Submit</button>
                    </div>
                </form>
        </div>
    </section>
















@endsection