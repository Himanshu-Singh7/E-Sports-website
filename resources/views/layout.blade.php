<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="extra/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
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

<div class="container-fluid">
    <div id="bg2"></div>
    <div id="bg3"></div>
    <div id="bg1"></div>
    <div id="bg4"></div>
    
    
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
                        <a href="{{url('')}}">home</a>
                    </li>
                    <li>
                        <a href="Events.html">Games</a>
                    </li>
                    <li>
                        <a href="Gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a href="sponsers.html">Sponsers</a>
                    </li>
                    <li>
                        <a href="News.html">News</a>
                        </li>
                        <li>
                        <a href="{{url('about')}}">about us</a>
                        </li>

                    </ul>
                    <!-- social media -->
                    <ul class="social-icons">
                    
                    <li>
                        <a href="login.html">
                        <i class="fas fa-sign-in-alt"></i>
                        </a>
                    </li>
                    <li>
                        <a href="Register.html">
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

 @yield('main_content')
 

<script>
        $('#hide1').hide()
        $('#Readless1').hide()
        $('#Readmore1').click(function(){
            $('#hide1').slideDown(1000)
            $('#Readmore1').hide()
            $('#Readless1').show()

        })

        $('#Readless1').click(function(){
            $('#hide1').slideUp(1000)
            $('#Readless1').hide()
            $('#Readmore1').show()

        })

        $('#hide2').hide()
        $('#Readless2').hide()
        $('#Readmore2').click(function(){
            $('#hide2').slideDown(1000)
            $('#Readmore2').hide()
            $('#Readless2').show()

        })

        $('#Readless2').click(function(){
            $('#hide2').slideUp(1000)
            $('#Readless2').hide()
            $('#Readmore2').show()

        })

        $('#hide3').hide()
        $('#Readless3').hide()
        $('#Readmore3').click(function(){
            $('#hide3').slideDown(1000)
            $('#Readmore3').hide()
            $('#Readless3').show()

        })

        $('#Readless3').click(function(){
            $('#hide3').slideUp(1000)
            $('#Readless3').hide()
            $('#Readmore3').show()

        })


</script>
        
        
        
        
        
        
    <!-- Footer -->
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


<!-- Sign-in Modal -->
<div class="modal" id="signin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Sign In</h4>
                <button class="close" data-dismiss="modal">
                    &times;
                </button>

                

            </div>
            <div class="modal-body">
                <form action="">
                    <label for="">Username</label>
                    <input type="text" class="form-control">
                    <label for="">Password</label>
                    <input type="password" class="form-control">
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success ">Login</button>
            </div>
        </div>
    </div>
</div>

<!-- Signup modal -->
<div class="modal" id="signup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                
            <button class="close" data-dismiss="modal">
                &times;
            </button>
            </div>
            <div class="modal-body">
                    <h3 class="text-center">Register</h3>
                <div class="alert alert-primary mt-2"> Create your account it will take only a minute</div>
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <label for="">First Name</label>
                            <input style="display: inline;" type="text" class="form-control">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <label for="">Last name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <form action="">
                    <label for="">Username</label>
                    <input type="text" class="form-control">
                    <label for="">Email</label>
                <input type="text" class="form-control">
                <label for="">Password</label>
                <input type="password" class="form-control">
                <label for="">Confirm password</label>
                <input type="password" class="form-control">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Discord ID</label>
                        <input type="text" class="form-control">

                    </div>
                    <div class="col-md-6">
                        <label for="">Steam ID</label>
                        <input type="text" class="form-control">

                    </div>
                </div>
                <label for="">Nationality</label>
                <input type="text" class="form-control">
                <input type="checkbox">
                <span>I accept the terms and conditions</span>
                



                </form>
        </div>
            <div class="modal-footer d-flex justify-content-around">
                <button class="btn btn-success  px-5">Submit</button>
            </div>
        </div>
    </div>
</div>

     <!-- <script>
        // $('#img5').hide()
        // $('#img6').hide()
        // $('#img7').hide()
        // $('#img8').hide()
        // $('#img9').hide()
        // $('#img10').hide()
        // $('#img11').hide()
        // $('#img12').hide()  

        $('#img1').click(function(){
            $('#img1').attr("src","images/Gallery/Rizul_12.jpg")
        })
    </script> -->
</body>
</html>
