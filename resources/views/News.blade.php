@extends('navbar')
@section('main')


    <div class="container">
      

      <div class="row">
        <div class="col-md-5 text-center mt-4 mx-auto ">
          <h2 style="border-bottom: 4px solid Black; color: aliceblue;letter-spacing: 0.5em;">NEWS</h2>
        </div>
        <!-- <div class="col-md-3"></div> -->
        <!-- <div class="col-md-3"></div> -->
        <div class="col-md-3 text-center mt-4">
          <div class="row">
            <div class="col-md-11 mt-2 mx-auto px-0">
                <h2 style="border-bottom: 4px solid Black; color: aliceblue;letter-spacing: 0.1em;" >NEWSLETTER</h2>
                
            </div>
        </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 my-5">
          <img  src="images/News/News_3.jpg" alt="">
          <h4  class="ml-5 mt-2"><b>ASUS ROG to Continue Hosting Esports IPs in India in 2021</b></h4>
          <p class="text-center mt-3" >ASUS ROG, announced Thursday the second leg of  the ROG Showdown - a series of online tournaments that focuses on ...</p>
          <img  class="mt-4" src="images/News/News_4.jpg" alt="">
          <h4  class="ml-5 mt-2"><b>Indian Industry Veteran Anurag Khurana Announces Newgen Gaming</b></h4>
          <p class="text-center mt-3" >Indian esports industry veteran Anurag Khurana announced his new initiative, Newgen Gaming. Khurana was previously working as a consultant with ...</p>
          <img  class="mt-4" src="images/News/News_1.jpg" alt="">
          <h4  class="ml-5 mt-2"><b>Nodwin Gaming’s Akshat Rathee and Sidarth Kedia on Krafton’s $22.5M Investment in the Company</b></h4>
          <p class="text-center mt-3" >On Monday, Indian esports and gaming company Nodwin Gaming announced that PUBG Mobile and PUBG owner Krafton, Inc. had invested ...</p>
          <img class="mt-4" src="images/News/News_5.jpg" alt="">
          <h4  class="ml-5 mt-2"><b>Team Vitality Settles Into Mumbai, Signs Several Indian Content Creators</b></h4>
          <p class="text-center mt-3" >French esport organization Team Vitality formally announced in October its plans to launch a division in India, and on Friday ...</p>
                 
         </div>

         <div class="col-md-1"></div>

         <div class="col-md-3 mt-5 ">
          

        <div class="row">
            <div class="col-md-11 mx-auto px-0 mt-2 bg-light">

                <div class="row">
                    <div class="col-md-11 mx-auto mt-3">
                        <h5>Never Miss a story</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-11 mx-auto mt-2">
                        <input type="text" placeholder="Enter Name" class="form-control">
                        <br>
                        <input type="email" placeholder="Enter Email" class="form-control">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-11 mx-auto mt-4">
                        <h5>Select your newsletter</h5>
                        <input id="check1" type="radio" name="one">
                        <label for=""><b>Daily breifing</b></label>
                        <br>
                        <input id="check2" type="radio" name="one">
                        <label for=""><b>Weekly breifing</b></label>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12  mx-auto text-center  mt-4 mb-3">
                        <button class="btn btn-danger px-5">SIGNUP</button>

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

  
  </body>
</html>
@endsection
