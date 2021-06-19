@extends('navbar')
@section('main')
        <div class="row">
            <div class="col-md-12 px-0 mx-auto text-center ">
                <div id="aboutback"><h1 style="color: white;">ABOUT US</h1></div>
                
    
     
            </div>
        </div>

            </div>
            
        </div>
        </div>
        


        <!-- About us -->
<div class="container">
    

    <div class="row">
        <div class="col-md-8 px-0 mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12 px-0 mx-auto text-center">
                        <h1 style="color:white;">Rizul Bansal</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mx-auto px-0 text-center">
                        <h5 style="color: white;">Founder of <span style="color: violet;">Picasso</span></h5>
                        <hr>
                    </div>
                </div>
                
                <div class="row" id="Aboutus">
                    <div class="col-md-12 mt-1 mb-2 p-5 mx-auto text-center px-0">
                        <p style="color: white;letter-spacing: 0.1em;"><span style="color: violet;">PICASSO GAMING</span> is one of the largest gaming platforms in India, having conducted over 20+ events since 2016 and reaching over 60,000 gamers offline and 10 million+ online.  We are the only technology showcase platform that puts gamers first and ensures the best possible experiences for both gamers and brands behind our various activities. PICASSO Gaming is also partnered with various Esport influencers across the country who take part in our activities, plus it is a platform that also showcases the talents of up and coming influencers as well. What started as just events has now developed into a robust online platform reaching out to every corner of the gaming industry in India with events, esports and engaging content.</p>
                        
                    </div>
                </div>
            </div>
            
            
            <!-- Get in touch -->
            
            <div class="col-md-4 mt-5">
                
                <div class="row">
                    <div class="col-md-10 mx-auto p-5 text-center">
                        <h4 style="color: white;">GET IN TOUCH</h4>
                        <hr>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-10 mx-auto">
                        <label for="" style="color: white;">NAME*</label>
                        <input type="text" class="form-control" placeholder="Enter Name">
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-10 mx-auto mt-3">
                        <label for="" style="color: white;">EMAIL*</label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-10 mx-auto mt-3">
                        <label for="" style="color: white;">SUBJECT*</label>
                        <input type="text" class="form-control" placeholder="Enter Subject">
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-10 mx-auto mb-5 mt-3">
                        <label for=""style="color: white;">MESSAGE*</label>
                        <input id="message" type="text" class="form-control" placeholder="Minimum 100 characters required.">
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mx-auto px-0 text-center mb-5">
                        <button class="btn btn-danger">SUBMIT</button>
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




     
</body>
</html>
@endsection()