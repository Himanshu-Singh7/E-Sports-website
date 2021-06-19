@extends('navbar')
@section('main')

<div class="container-fluid">
        <div id="bg2"></div>
        <div id="bg3"></div>
        <div id="bg1"></div>
        <div id="bg4"></div>
    

<!-- Cover pic and logo -->
        <div class="row">
            <div class="col-md-12 px-0">
                <img id="cover-pic" src="Images/Games/tom-clancys-rainbow-six-siege-year-3-pass-uhd-8k-wallpaper.jpg" alt="" >
                <div id="moto"><h1>"For Gamers By Gamers"</h1></div>
                
                
                
            </div>
        </div>
        
        
        <div class="container">
            
            
            
            <!-- Reach -->
            <div class="row ">
                <div class="col-md-8 px-0 mx-auto mt-5 text-center" >
                    
                    
                    <h1 style="font-family: 'Recursive', sans-serif;color: white; letter-spacing: 1em;">OUR <span style="color: purple;">REACH</span></h1>
                    <hr>
                </div>
        </div>
        

        <!-- Fanbase -->
        
        <div class="row bg-light text-center ">
            <div class="col-md-3 px-0 mb-5">
                
                <div class="row mt-4">
                    <div class="col-md-12" id="fanbase">
                        <b style="font-family: cursive;">100k+</b>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <span style="font-family: cursive;color: white;">#PICASSO FANBASE</span>
                    </div>
                </div>
                
            </div>
            
            <!-- Events -->
            <div class="col-md-3 px-0 mb-5">
                
                <div class="row mt-4">
                    <div class="col-md-12" id="fanbase">
                        <b style="font-family: cursive;">21</b>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <span style="font-family: cursive;color: white;">TOTAL EVENTS</span>
                    </div>
                </div>
                
            </div>
            
            <!-- Cities -->
            <div class="col-md-3 px-0 mb-5">
                
                <div class="row mt-4">
                    <div class="col-md-12" id="fanbase">
                        <b style="font-family: cursive;">10+</b>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <span style="font-family: cursive;color: white;">CITIES COVERED</span>
                    </div>
                </div>
                
            </div>
            
            <!-- Influencers -->
            <div class="col-md-3 px-0 mb-5">
                
                <div class="row mt-4">
                    <div class="col-md-12" id="fanbase">
                        <b style="font-family: cursive;">30+</b>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <span style="font-family: cursive;color: white;">NO. OF INFLUENCERS</span>
                    </div>
                </div>
                
            </div>
        </div>

        
        
        <!-- Gallery -->
        <div class="row">
            <div class="col-md-11 mx-auto mt-5 px-0 pt-5">
                <h2 style="font-family: 'Recursive', sans-serif;color: white; letter-spacing: .5em;">SOME OF OUR EVENTS <span style="color: purple;">IMAGES</span></h2>
                <hr>
            </div>
        </div>
        
        
        <div class="row mb-5 mt-3 ml-5 pt-2  " id="homegallery">
            <div class="col-md-4">
                <!-- <img id="img1" src="images/Gallery/Rizul_1.png" alt=""> -->
            </div>
            <div class="col-md-6 mx-auto mt-5 p-5  text-center ">
                <p >“You Can't have happiness without pain; You need to have a little bit of rain, to have a little bit of rainbow”</p>
            </div>
            
        </div>



        <!-- Sponsers -->
        <div class="row " >
            <div class="col-md-11 mx-auto pt-3 ">
                <h2 style="font-family: 'Recursive', sans-serif;color: white; letter-spacing: 1em;">SPON<span style="color: purple;">SERS</span></h2>
                <hr>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 mx-auto" id="sponsershomepage">
                 <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/Logos/Logo_15.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_24.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_18.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_19.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_20.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_9.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_10.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_27.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_12.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_13.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_25.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_4.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_28.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_30.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_31.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_35.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_32.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_36.png" alt=""></div>
      <div class="swiper-slide"><img src="images/Logos/Logo_37.png" alt=""></div>
    </div>
    

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
        autoplay: {
    delay: 600,
  },
  loop:true,
      slidesPerView: 6,
      spaceBetween: 30,
      
    });
  </script>
            </div>
        </div>

        






        <!-- News -->
        <div class="row " >
            <div class="col-md-11 mx-auto mt-5  ">
                <h2 style="font-family: 'Recursive', sans-serif;color: white; letter-spacing: 1em;">NE<span style="color: purple;">WS</span></h2>
                <hr>
            </div>
        </div>

                <div class="row" id="homenews">
                 <div class="col-md-12 mb-5 ">
                     <div class="row">
                         <div class="col-md-6">


                             <div class="row text-center mb-5 mt-5">
                                <div class="col-md-4 px-0 text-center">
                                    <img src="images/News/News_1.jpg" alt="">
                                </div>
                                <div class="col-md-8">
                                    <b style="color: aliceblue;">Nodwin Gaming’s Akshat Rathee and Sidarth Kedia on Krafton’s $22.5M Investment in the Company</b>
                                    <p id="hide1" style="margin-top: 10px; color: aliceblue;">On Monday, Indian esports and gaming company Nodwin Gaming announced that PUBG Mobile and PUBG owner Krafton, Inc. had invested</p>
                                    <br>
                                    <h1 id="Readmore1" style="color: aliceblue;">&#10161;</h1>
                                    <h2 id="Readless1" style="color: aliceblue;">&#10161;</h2>
                                </div>
                             </div>



                             <div class="row text-center mb-2 mt-2">
                                <div class="col-md-4 px-0 text-center">
                                    <img src="images/News/News_2.jpg" alt="">
                                </div>
                                <div class="col-md-8 ">
                                    <b style="color: aliceblue;">Indian Gaming League Secures $500K Strategic Investment</b>
                                    <p id="hide2" style="margin-top: 10px;color: aliceblue;">The Indian Gaming League (IGL) parent company, House of Gaming Pvt. Ltd., announced that it has raised a $500K USD </p>
                                    <br>
                                    <h1 id="Readmore2" style="color: aliceblue;">&#10161;</h1>
                                    <h2 id="Readless2" style="color: aliceblue;">&#10161;</h2>
                                </div>
                             </div>


                             <div class="row text-center  mt-5">
                                <div class="col-md-4 px-0 text-center">
                                    <img src="images/News/News_3.jpg" alt="">
                                </div>
                                <div class="col-md-8 ">
                                    <b style="color: aliceblue;">ASUS ROG to Continue Hosting Esports IPs in India in 2021</b>
                                    <p id="hide3" style="margin-top: 10px;color: aliceblue;">On Monday, Indian esports and gaming company Nodwin Gaming announced that PUBG Mobile and PUBG owner Krafton, Inc. had invested</p>
                                    <br>
                                    <h1 id="Readmore3"style="color: aliceblue;" >&#10161;</h1>
                                    <h2 id="Readless3"style="color: aliceblue;">&#10161;</h2>
                                </div>
                             </div>

                </div>


               
               <!-- Video -->
                <div class="col-md-6 text-center">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/cJ51YvSRL-4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <iframe width="460" height="215" src="https://www.youtube.com/embed/VhXRbrlOe08" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

                 </div>
        
        
    </div>
</div>
</div>


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
@endsection()