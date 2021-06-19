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




<!-- Form -->

<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0" id="registerbackground">
            @if(Session::has('validatorerror'))
              <div class="row">
                  <div class="col-md-6 mx-auto">
                      <div class="alert alert-success">
                        <h6 class="text-center"> {{Session::get('validatorerror')}}</h6>
                      </div>
                  </div>
              </div>
            @endif
                <div class="row">
                    <div class="col-md-7 mx-auto my-2 mx-5 py-" id="form">
                        <div class="row" id="Register">
                            

                            
                            
                          <div class="row py-3 px-3">
                              <div class="col-md-12">
                                  <div class="col-md-12 text-center pt-3">
                                    <h2 style="color: aliceblue;font-size: 50px;"><i class="fas fa-users"></i></h2>
                                    
                                    
                                  </div>
                                <div class="row px-3 pt-1">
                                    <div class="col-md-6 ">
                                        <form action="{{url('Registerdetails')}}" method="post" enctype="multipart/form-data" >
                                          @csrf
                                            <label class="mt-2" for="" style="color: aliceblue;">First Name</label>
                                           <input type="text" name="first" placeholder="Enter First Name" class="form-control">
                                            
                                        </div>
                                        <div class="col-md-6 px">
                                          
                                        <label class="mt-2" for="" style="color: aliceblue;">Last Name</label>
                                        <input type="text" name="last" placeholder="Enter Last Name" class="form-control">
                                        
                                    </div>
                    
                                  </div>
                              
                                <label class="mt-2" for="" style="color: aliceblue;">Username</label>
                                <input type="text" name="username" placeholder="Enter Username" class="form-control">
                                <label  class="mt-2" for=""style="color: aliceblue;">Email</label>
                                <input type="text" name="email" placeholder="Enter email" class="form-control">
                                <label class="mt-2" for=""style="color: aliceblue;">Password</label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control">
                                <label class="mt-2" for=""style="color: aliceblue;">Confirm Password</label>
                                <input type="password" name="last" placeholder="Enter Password" class="form-control" >
                                <label class="mt-2" for=""style="color: aliceblue;">Nationality</label>
                                <br>
                                <select name="nation" id="Countries" class="Countries" >
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Bhutan">Bhutan</option>
                                </select>
                                
                          <div class="row">
                            <div class="col-md-6">
                              <label for=""style="color: aliceblue;" class="mt-2">Discord id</label>
                                <input type="text" name="discord" placeholder="Enter Discord id" class="form-control">
                                
                            </div>
                            <div class="col-md-6">
                              <label for=""style="color: aliceblue;" class="mt-2">Steam id</label>
                                <input type="text" name="steam" placeholder="Enter Steam id" class="form-control">
                              </div>
                          </div>
                          
                          <input name="checkbox" type="checkbox" class="mt-3 ml-2"><span style="color: aliceblue;"> I accept the terms and conditions</span>
                          <br>
            
                          <input type="submit" class="btn my-3 " style="background: peachpuff !important; color: black !important;" value="Register">
                          
                        </form>
                            </div>
                          </div>
                          
                          
                        </div>
                    </div>
                </div>
            </div>
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
