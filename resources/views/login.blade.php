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


@if(!Cookie::has('email'))
    
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

<div class="container-fluid" id="loginbg">
    <div class="row">
       <div class="col-md-12 px-0" >
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
               <div class="col-md-8 mx-auto border my-5 px-auto py-5  " id="firstbg">
                   <h1 class="text-center" style="font-family: 'Recursive', sans-serif;color: whitesmoke;"><span style="color: violet;font-size: 50px;"><i class="fas fa-gamepad"></i></span> Login Form</h1>
                   <!-- <h2 class="text-center">&nbsp;&nbsp;&nbsp;</h2> -->
                   <div class="row">
                       <div class="col-md-5 mx-auto  my-3   py-5 px-5" id="secondbg">
                           
                           <form action="{{url('loginform')}}" method="post">
                           @csrf
                               <label for="">Email</label>
                               <input type="email" placeholder="email"  class="form-control" name="email">
                               <label for="">Password</label>
                               <input type="password" placeholder="Password"  class="form-control" name="password">
                               <input id="loginbtn" type="submit" value="Login" class="btn  mt-3 ">
                               <br>
                               <a id="forgotpasslink"  href="javascript:void(0)" class="mt-5">Forgot Password ??</a>

                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>

<div class="modal" id="passreset" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reset Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      @csrf
      <small id="msg"></small>
        <p>Enter Email to receive password reset Link.</p>
        <div class="row">
          <div class="col-md-8 mx-auto">
            <input type="email" id="email" class="form-control" placeholder="Enter Email">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button id="sendotp" type="button" class="btn btn-success">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
  $('#forgotpasslink').click(function(){
    $('#passreset').modal('show')
  })

  $('#sendotp').click(function(){
    let email = $('#email').val()
    let token=$('input[name="_token"]').val();
    console.log(token)
    // console.log(email)
    $.ajax({
      url:'{{url("emailcheck")}}',
      type:'post',
      data:{'email':email,'_token':token},
      success:function(data){
            if(data==1){
                 $('#msg').text('Link send to ur email')
                 $('#msg').css('color','green')
                }
                else{
                  
                  $('#msg').text('Please enter registered Email')
                  $('#msg').css('color','red')
            }
      }
    })
  })

</script>


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
<script>
  $('#eyes').click(function(){
  let d = $('#pass').attr('type')
  if(d=='password'){
    $('#pass').attr('type','text')
    $('#eyes').removeClass('fa-eye').addClass('fa-eye-slash')
  }
  else{
    $('#pass').attr('type','password')
    $('#eyes').removeClass('fa-eye-slash').addClass('fa-eye')
    
  }
  
  
})
</script>

</div>
@endif
</body>
</html>



