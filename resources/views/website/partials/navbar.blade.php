
<!-- Navbar 1 Start -->
    <section id="Nav1">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <i class="fas fa-phone-volume" style="border-right: 1px solid gray;">+8801774709890 
                                &nbsp; &nbsp; </i>
                        </li>
                        <li class="nav-item">
                            <i class="far fa-envelope" style="padding-left: 15px;"> InfoBloodBank@gmail.com</i>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto order-0 navbar-brand mx-auto">
                    <a href="https://www.instagram.com/"><i
                            class="fab fa-instagram github">&nbsp;&nbsp;</i></a>
                    <a href="https://www.facebook.com/"><i
                            class="fab fa-facebook-f facebook">&nbsp;&nbsp;</i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter twitter">&nbsp;&nbsp;</i></a>
                    <a href="https://api.whatsapp.com/"><i
                            class="fab fa-whatsapp whats">&nbsp;&nbsp;</i></a>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item">
                            <a class="nav-link selected" style="border-right: 1px solid gray;" href="#">EN &nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="padding-left: 15px;" href="#">AR</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar 1 End -->

    <!-- Navbar 2 Start -->
    <section id="Nav2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="{{url('website/imgs/logo.png')}}" width="18%"></img>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
                    </li>
                    @if(auth()->user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('post.page')}}">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('post.view')}}">View Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blood.category')}}">Blood Request</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('whoweare')}}">Who We Are ?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactus')}}">Feedback</a>
                    </li>
                </ul>
                @if(auth()->user())
                <a class="btn signup" href ="{{route('user.logout')}}" >{{auth()->user()->name}}|Logout</a>
                <a class="btn signup" href ="{{route('profile.view')}}" >Profile</a>
                @else
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                   <a class="dropdown-item" href="{{route('donorlogin')}}">User login</a>
    <!-- <a class="dropdown-item" href="{{route('recipentlogin')}}">Recipent login</a>
    <a class="dropdown-item" href="{{route('admin.login')}}">Admin login</a> -->
  </div>
</div>
</div>

                <!-- <button class="btn login" onclick= "window.location.href = 'login.html';">Login</button>  -->
                
  <a class="btn signup" href ="{{route('register')}}" >Register</a>
  @endif
  

            
        </nav>
    </section>
    <!-- Navbar 2 End -->