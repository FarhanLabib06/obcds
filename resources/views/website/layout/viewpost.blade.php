@extends('website.master')
@section('content')

 <section id="articles">
         
        <div class="container">
            <h2 style="display: inline-block;">Post</h2>
            <div class="swiper-container">
            <div class="button-area" style="display: inline-block; margin-left: 850px;">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </button>
            </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        @foreach($post as $p)
                        <div class="card">
                            <div class="card-img-top" style="position: relative;">
                                <img src="{{url('website/imgs/p3.jpg')}}" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">

                                <h4 class="card-title">{{$p->title}}</h4>
                                <p class="card-text">{{$p->messege}}</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = 'article.html';">Details</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
        </div>
        
    </section>
@endsection