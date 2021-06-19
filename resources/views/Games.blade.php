@extends('navbar')
@section('main')

        <!-- Events -->
        <div class="container">

            
            <div class="row  mt-5 mb-5">
            <div class="col-md-8 px-0 mx-auto text-center" >
                
                <h1 style="font-family: 'Recursive', sans-serif;color: white;">PICASSO <span style="color: violet;">GAMES</span></h1>
                <p class="text-muted">“The team that keeps winning is not the most talented but the most hard-working”</p>
                <hr>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-md-12 px-0">
         <!-- Swiper -->
  <div class="swiper-container" id="Gamescarousel">
    <div class="swiper-wrapper">
      <div class="swiper-slide" id="Gamesimg"><a href="{{url('Apex_legend')}}"><img src="images/Games/Apex.jpg" alt=""></a></div>
      <div class="swiper-slide" id="Gamesimg"><a href="{{url('cod')}}"><img src="images/Games/cod.jpg" alt=""></a></div>
      <div class="swiper-slide" id="Gamesimg"><a href="{{url('Cs_go')}}"><img src="images/Games/wp2516227-csgo-wallpapers.jpg" alt=""></a></div>
      <div class="swiper-slide" id="Gamesimg"><a href="{{url('Pubg')}}"><img src="images/Games/wp2516033-playerunknowns-battlegrounds-hd-wallpapers.jpg" alt=""></a></div>
      <div class="swiper-slide" id="Gamesimg"><a href="{{url('Valorant')}}"><img src="images/Games/wp6491426-valorant-4k-wallpapers.jpg" alt=""></a></div>
      <div class="swiper-slide" id="Gamesimg"><a href="{{url('Rocket_league')}}"><img src="images/Games/wp1854239-rocket-league-wallpapers.jpg" alt=""></a></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>

  

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      autoplay:{
        delay:2000,
      },
      spaceBetween: 30,
      loop:true,
      effect: 'fade',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
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
@endsection()