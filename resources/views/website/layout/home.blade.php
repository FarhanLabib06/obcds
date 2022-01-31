@extends('website.master')
@section('content')

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
    <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif

<!-- Articles Start -->
 <section id="header">
        <div class="container">
            <!-- <h1>We are seeking for a better community health.</h1>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellat inventore nemo repudiandae
                ipsum quos.</h4>
            <button class="btn more" onclick= "window.location.href = 'About-us.html';">More</button> -->
        </div>
    </section>
 <section id="sub-header">
        <div class="container">
            <h3>A SINGLE PINT CAN SAVE THREE LIVES, A SINGLE GESTURE CAN CREATE A MILLION SMILES.</h3>
        </div>
    </section>
    <section id="articles">
        
        <div class="container">
            <h2 style="display: inline-block;">Article</h2>
            <div class="swiper-container">
            <div class="button-area" style="display: inline-block; margin-left: 850px;">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </button>
            </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img-top" style="position: relative;">
                                <img src="{{url('website/imgs/p3.jpg')}}" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Blood Types</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    laborum
                                    dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea sed
                                    nihil
                                    dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = 'article.html';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img-top" style="position: relative;">
                                <img src="{{url('website/imgs/p4.jpg')}}" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Donations Benefits</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    laborum
                                    dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea sed
                                    nihil
                                    dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = 'article.html';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card-img-top" style="position: relative;">
                                <img src="{{url('website/imgs/p1.jpg')}}" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Disease Protection</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    laborum
                                    dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea sed
                                    nihil
                                    dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = 'article.html';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img-top" style="position: relative;">
                                <img src="{{url('website/imgs/p5.jpg')}}" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            
                            <div class="card-body">
                                <h4 class="card-title">How To Donate?</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    laborum
                                    dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea sed
                                    nihil
                                    dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = 'article.html';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- Articles End -->



    <!-- Call us Start -->
    <section id="call-us">
        <div class="layer">
            <div class="container">
                <h1>Call Us</h1>
                <h4>You can call us for your inquiries about any information.</h4>
                <div class="whats">
                    <img src="imgs/whats.png" alt="">
                    <h3>+8801774709890</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Call us End -->

    <!-- App Start -->
    <!-- <section id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <h1>Blood Bank Application</h1>
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae earum officiis et eligendi nam
                            harum corporis saepe deserunt.</h3>
                        <h4>Available On</h4>
                        <img src="imgs/ios.png" alt="">
                        <img src="imgs/google.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="app-screen" src="imgs/App.png" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <!-- App End -->
@endsection