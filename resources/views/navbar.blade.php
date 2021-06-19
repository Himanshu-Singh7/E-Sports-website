<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('extra/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.6/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('project.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.6/swiper-bundle.css">
    <style>
        body{
            background: linear-gradient(60deg,purple,black,purple,black,purple,black,purple,black);
        }
        *{
            padding: 0;
            margin: 0;
        }

     
    </style>
</head>
<body>

   
    
    
    <!-- Header navigation bar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <nav>
                    <div class="nav-center">
                      <!-- nav header -->
                      <div class="nav-header">
                        <h2>Picasso <span style="color: violet;" id="gaming-esports"></span></h2>
                        <button class="nav-toggle">
                          <i class="fas fa-bars"></i>
                        </button>
                      </div>
                      <!-- links -->
                      <ul class="links">

                        <li>
                          <a href="{{url('homepage')}}">home</a>
                        </li>
                        <li>
                          <a href="{{url('Games')}}">Games</a>
                        </li>
                        <li>
                          <a href="{{url('gallery')}}">Gallery</a>
                        </li>
                        <li>
                          <a href="{{url('sponsers')}}">Sponsers</a>
                        </li>
                        <li>
                            <a href="{{url('news')}}">News</a>
                          </li>
                          <li>
                            <a href="{{url('about')}}">about us</a>
                          </li>

                      </ul>
                      <!-- social media -->
                      <ul class="social-icons">
                      @if(!Cookie::has('email'))
                        
                        <li>
                          <a href="{{url('login')}}">
                            <i class="fas fa-sign-in-alt"></i>
                          </a>
                        </li>
                        <li>
                          <a href="{{url('register')}}">
                            <i class="fas fa-user-plus"></i>
                          </a>
                        </li>
                        @else
                        
                        <li>
                          <a href="{{url('logout')}}">
                          <i class="fas fa-sign-out-alt"></i>
                          </a>
                        </li>
                        @endif
                      </ul>
                    </div>
                  </nav>
                
            </div>
        </div>

        <script>
            const navToggle = document.querySelector(".nav-toggle");
       const links = document.querySelector(".links");
       const socialIcons = document.querySelector(".social-icons");
       
       navToggle.addEventListener("click", function () {
         console.log(links.classList);
         links.classList.toggle("show-links");
         socialIcons.classList.toggle("show-icons");
       });
        </script>

        @yield('main')
