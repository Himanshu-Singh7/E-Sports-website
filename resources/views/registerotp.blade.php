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
@if(Session::has('success'))
  <div class="row">
      <div class="col-md-6 mx-auto">
          <div class="alert alert-success">
             <h6 class="text-center"> {{Session::get('success')}}</h6>
          </div>
      </div>
  </div>
@endif
@if(Session::has('error'))
  <div class="row">
      <div class="col-md-6 mx-auto">
          <div class="alert alert-danger">
             <h6 class="text-center"> {{Session::get('error')}}</h6>
          </div>
      </div>
  </div>
@endif
<div class="row">
    <div class="col-md-4 mx-auto my-5 border text-center" style="height: 300px;">
        <form action="{{url ('emailverify')}}" method="post">
            @csrf
            <label for="" style="font-size: 30px;font-family:cursive;margin-top:20px;">Email Verification</label>
            <div class="row">
                <div class="col-md-5 mx-auto mt-3">
                    <input type="number" name="otp" placeholder="Enter 6 digit otp" class="form-control mx-auto" min="6">
                </div>
            </div>
            <input type="submit" value="Submit" class="btn btn-info mt-3">
        </form>
    </div>
</div>


<!-- Footer -->
<div class="container-fluid">
     <div class="row" id="footer">
        <div class="col-md-12  mx-auto text-center py-4">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>
            <a href=""><i class="fab fa-discord"></i></a>
            <a href=""><i class="fab fa-twitch"></i></a>
            <br>
            <br>
        </div>
        
        
        
        <div class="col-md-12 mx-auto px-0 text-center mb-2">
            <span><a href="">Social@picasso.com</a></span>

        </div>
    

    
        <div class="col-md-12 mx-auto px-0 text-center mt-3">
            <span><a href="">+91-8837778760</a></span>

        </div>
    
       
    
        <div class="col-md-12 mx-auto px-0 text-center mt-3">
            <span style="color: white;font-size: 20px;">COPYRIGHT&copy; ALL RIGHTS RESERVED BY <span style="color: violet;">PICASSOGAMING</span></span>

        </div>
    
    </div>
</div>

</div>

</body>
</html>