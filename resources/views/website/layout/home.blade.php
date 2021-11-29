@extends('website.master')
@section('content')
<!-- Articles Start -->
    <section id="articles">
        <div class="container">
            <h2 style="display: inline-block;">Articles</h2>
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

    <!-- Requests Start -->
    <section id="requests">
        <div class="title">
            <h2>Donations</h2>
            <hr class="line">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <select name="Type" id="">
                        <option value="" disabled selected>Select Blood Type</option>
                        <option value="AB+">AB+</option>
                        <option value="O">O</option>
                        <option value="B">B</option>
                    </select>
                </div>
                <div class="col-lg-5">
                    <select name="City" id="">
                        <option value="" disabled selected>Select City</option>
                        <option value="Alexandria">Alexandria</option>
                        <option value="Cairo">Cairo</option>
                        <option value="Giza">Giza</option>
                    </select>
                </div>
                <div class="search">
                    <button><i class="col-lg-2 fas fa-search"></i></button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="type">
                                <h2>AB+</h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h4>Name: Ahmed Mohamed</h4>
                            <h4>Hospital: Andalusia Hospitals</h4>
                            <h4>City: Cairo</h4>
                        </div>
                        <div class="col-lg-3">
                            <button onclick= "window.location.href = 'donator.html';">Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="type">
                                <h2>AB+</h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h4>Name: Ahmed Mohamed</h4>
                            <h4>Hospital: Andalusia Hospitals</h4>
                            <h4>City: Cairo</h4>
                        </div>
                        <div class="col-lg-3">
                            <button onclick= "window.location.href = 'donator.html';">Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="type">
                                <h2>AB+</h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h4>Name: Ahmed Mohamed</h4>
                            <h4>Hospital: Andalusia Hospitals</h4>
                            <h4>City: Cairo</h4>
                        </div>
                        <div class="col-lg-3">
                            <button onclick= "window.location.href = 'donator.html';">Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-req">
                <button onclick= "window.location.href = 'requests.html';">More</button>
            </div>
        </div>
    </section>
    <!-- Requests End -->

    <!-- Call us Start -->
    <section id="call-us">
        <div class="layer">
            <div class="container">
                <h1>Call Us</h1>
                <h4>You can call us for your inquiries about any information.</h4>
                <div class="whats">
                    <img src="imgs/whats.png" alt="">
                    <h3>+20 127 245 6884</h3>
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