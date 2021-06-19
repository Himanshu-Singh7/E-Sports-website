<div class="container-fluid">
        <div id="bg"></div>
@extends('navbar')
@section('main')



<div class="row">
    <div class="col-md-8 mx-auto my-5 py-4 px-0">

           <div class="row">
               <div class="col-md-12 px-0 bg-dark text-center text-light">
                   <h1>SYSTEM REQUIREMENTS</h1>
               </div>
           </div>

           <div class="row">
               <div class="col-md-6 px-0 text-center mt-2">
                   <h2>Minimum specs</h2>
                   <hr>
               </div>
               <div class="col-md-6 px-0 text-center mt-2">
                   <h2>Recommended specs</h2>
                   <hr>
                   
               </div>
           </div>
         
           <div class="row">
               <div class="col-md-6 mt-1">
                   <span><b>CPU:</b> Intel Core i3-6300 3.8GHz / AMD FX-4350 4.2 GHz Quad-Core</span>
                   <hr>
               </div>
               <div class="col-md-6 mt-1">
                <span><b>CPU:</b> Intel i5 3570K / Ryzen 5 CPU or equivalent</span>
                <hr>
               </div>
           </div>

           <div class="row">
               <div class="col-md-6">
                <span><b>RAM:</b> 4 GB</span>
                <hr>
               </div>
               <div class="col-md-6">
                <span><b>RAM:</b> 8 GB</span>
                <hr>
               </div>
           </div>

           <div class="row">
               <div class="col-md-6">
                <span><b>OS:</b> 64-bit Windows 7</span>
                <hr>
               </div>
               <div class="col-md-6">
                <span><b>OS:</b> 64-bit Windows 7</span>
                <hr>
               </div>
           </div>

           <div class="row">
               <div class="col-md-6">
                <span><b>VIDEO CARD:</b> NVIDIA GeForce 760, AMD Radeon R7 270X</span>
                <hr>
               </div>
               <div class="col-md-6">
                <span><b>VIDEO CARD:</b> NVIDIA GeForce GTX 1060, AMD Radeon RX 470</span>
                <hr>
               </div>
           </div>

           <div class="row">
               <div class="col-md-6">
                <span><b>PIXEL SHADER:</b> 5.0</span>
                <hr>
               </div>
               <div class="col-md-6">
                <span><b>PIXEL SHADER:</b> 5.1</span>
                <hr>
               </div>
           </div>

           <div class="row">
               <div class="col-md-6">
                <span><b>VERTEX SHADER:
                </b> 5.0</span>
                <hr>
               </div>
               <div class="col-md-6">
                <span><b>VERTEX SHADER:
                </b> 5.1</span>
                <hr>
               </div>
           </div>

           <div class="row">
               <div class="col-md-6">
                <span><b>DEDICATED VIDEO MEMORY:
                </b> 2 GB</span>
                <hr>
               </div>
               <div class="col-md-6">
                <span><b>DEDICATED VIDEO MEMORY:
                </b> 3 GB</span>
                <hr>
               </div>
           </div>

           <div class="row">
               <div class="col-md-4 px-0 mx-auto mt-2 text-center">
                   <button class="btn btn-success" data-target="#rl-team" data-toggle="modal">Click Here to register</button>
               </div>
           </div>

    </div>
</div>




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


 

<!-- Team selection -->

<div class="modal" id="rl-team">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <b>U ARE PLAYING IN WHICH SQUAD TYPE ? </b><br>
                <button class="btn btn-success btn-outline-warning" data-target="#rl-register-solo" data-toggle="modal">Solo</button>
                <button class="btn btn-success btn-outline-warning" data-target="#rl-register-duo" data-toggle="modal">Duos</button>
                <button class="btn btn-success btn-outline-warning" data-target="#rl-register-trio" data-toggle="modal">Trios</button>
            </div>
        </div>
    </div>
</div>

<!-- Solo -->

<div class="modal" id="rl-register-solo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 px-0 mx-auto text-center ">
                        <h3>Register</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <label for="">Player IRL Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                            <label for="">Player IG Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                            <label for="">Player Discord id</label>
                            <input type="text" class="form-control" placeholder="Enter ID">
                            
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-success">Click to Register</button>
            </div>
        </div>
    </div>
</div>


<!--duos -->

<div class="modal" id="rl-register-duo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 px-0 mx-auto text-center ">
                        <h3>Register</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <label for="">Team leader's IRL Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                            <label for="">Team leader's IG Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                            <label for="">Team leader's Discord id</label>
                            <input type="text" class="form-control" placeholder="Enter ID">
                            
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <label for="">Teammate IG Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                            <label for="">Teammate Discord id</label>
                            <input type="text" class="form-control" placeholder="Enter ID">
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-success">Click to Register</button>
            </div>
        </div>
    </div>
</div>

<!-- Trios -->
<div class="modal" id="rl-register-trio">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 px-0 mx-auto text-center ">
                        <h3>Register</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <label for="">Team leader's IRL Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                            <label for="">Team leader's IG Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                            <label for="">Team leader's Discord id</label>
                            <input type="text" class="form-control" placeholder="Enter ID">
                            
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <label for="">Teammate 1 IG Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                            <label for="">Teammate 1 Discord id</label>
                            <input type="text" class="form-control" placeholder="Enter ID">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form action="">
                            <label for="">Teammate 2 IG Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                            <label for="">Teammate 2 Discord id</label>
                            <input type="text" class="form-control" placeholder="Enter ID">
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-success">Click to Register</button>
            </div>
        </div>
    </div>
</div>


</body>
</html>
@endsection()