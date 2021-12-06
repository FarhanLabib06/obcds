@extends('website.master')
@section('content')

 <!-- login Start -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 call">
                    <div class="title">Head</div>
                    <img src="imgs/logo.png" alt="">
                    <hr>
                    <h4>Mobile: +20 127 245 6884</h3>
                        <h4>Fax: +2 455 6646</h3>
                            <h4>Email: InfoBloodBank@gmail.com</h3>
                                <hr>
                                <h3>Find Us On</h3>
                                <div class="icons">
                                    <i class="fab fa-facebook-square fa-3x"></i>
                                    <i class="fab fa-google-plus-square fa-3x"></i>
                                    <i class="fab fa-twitter-square fa-3x"></i>
                                    <i class="fab fa-whatsapp-square fa-3x"></i>
                                    <i class="fab fa-youtube-square fa-3x"></i>
                                </div>
                </div>
                <div class="col-md-6 info">
                    <div class="title">Head</div>
                    <form action="submit">
                        <input type="text" name="name" id="" placeholder="Name" required="">
                        <input type="email" name="name" id="" placeholder="Email" required="">
                        <input type="number" name="name" id="" placeholder="Phone" required="">
                        <input type="text" name="title" id="" placeholder="Title" required="">
                        <textarea name="message" id="" cols="10" rows="5" placeholder="Message"></textarea>
                        <div class="reg-group">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- login End -->

@endsection