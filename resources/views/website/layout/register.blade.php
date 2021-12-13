@extends('website.master')
@section('content')

    <section id="sign-up">
        <div class="container">
                <img src="{{url('website/imgs/logo.png')}}" alt="">
                <form action="{{route('user.do.registration')}}" method='post'>
                    @csrf
                    <input name="name" type="text" placeholder="Name" required>

                    <select name="type" id="type" required="">
                        <option value="Gender" disabled>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                    <input name="email" type="email" placeholder="Email" required>

                    <!-- <input type="date" name="bday" placeholder="Birth date"> -->
                    <select name="blood_type" id="type" required="">
                        <option disabled>Blood Type</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB+">AB+</option>
                    </select>

                    

                    <select name="Gov" id="Gov" required="">
                        <option value="Address" disabled>Address</option>
                        <option value="Uttara">Uttara</option>
                        <option value="Banani">Banani</option>
                        <option value="Gulshan">Gulshan</option>
                        <option value="Mirpur">Mirpur</option>
                        <option value="Rampura">Rampura</option>
                        <option value="Bashundhara">Bashundhara</option>
                    </select>

                    <input name="phone" type="number" placeholder="Phone Number" required>

                    <input name="password" type="pasword" placeholder="Password" required="">
                    <!-- <input type="date" name="donate-day"> -->
                    <div class="reg-group">
                        <input class="check" type="checkbox" required="" style="height: auto; display:inline; margin: 0 auto;">Agree on terms and conditions<br>
                        <button class="submit" type="submit" style="background-color: rgb(51, 58, 65);">Submit</button>
                    </div>
                </form>
        </div>
    </section>
    
@endsection