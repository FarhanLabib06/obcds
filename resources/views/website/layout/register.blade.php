@extends('website.master')
@section('content')

    <section id="sign-up">
        <div class="container">
                <img src="{{url('website/imgs/logo.png')}}" alt="">
                <form action="submit">
                    <input type="name" placeholder="Name" required>
                    <input type="email" placeholder="Email" required>
                    <input type="date" name="bday" placeholder="Birth date">
                    <select name="type" id="type" required="">
                        <option value="Blood Type" disabled>Blood Type</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB+">AB+</option>
                    </select>
                    <select name="Gov" id="Gov" required="">
                        <option value="Governorate" disabled>Governorate</option>
                        <option value="A">Alexandria</option>
                        <option value="B">Cairo</option>
                        <option value="O">Giza</option>
                        <option value="AB+">Fayoum</option>
                    </select>
                    <input type="Phone" placeholder="Phone Number" required="">
                    <input type="date" name="donate-day">
                    <div class="reg-group">
                        <input class="check" type="checkbox" required="" style="height: auto; display:inline; margin: 0 auto;">Agree on terms and conditions<br>
                        <button class="submit" type="submit" style="background-color: rgb(51, 58, 65);">Submit</button>
                    </div>
                </form>
        </div>
    </section>
    
@endsection