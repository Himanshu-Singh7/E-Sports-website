@extends('navbar')
@section('main')

<!-- Form -->
<div class="container-fluid" id="tournamentbg">
    <div class="row">
        <div class="col-md-12  my-5">

            <div class="row">
              <div class="col-md-10 mx-auto  my-5 text-center" id="tournamentbg1">
                    <h1 style="text-transform: uppercase;color: white; margin-top: 20px;">Register For <span style="color: violet;">Tournament</span></h1>
                <div class="row">
                  <div class="col-md-8 mx-auto  my-5">

                    <form action="{{url('gamedata')}}" method="post">
                      @csrf

                      <label for="">Game</label>
                      <input type="text" value="{{$data}}" readonly class="form-control" name="game">
                      
                      <label for="">Mode of tournament</label>
                      <br>
                      <select name="mode" id="Modes" class="mode" onchange="modevalue()">
                        <option value="Select modes" >Select Mode....</option>
                        <option value="Solo">Solo</option>
                        <option value="Duos">Duos</option>
                        <option value="Trios">Trios</option>
                      </select>

                      <div class="row mt-3">
                        <div class="col-md-6 mx-auto ">
                        <label for="">Team Name</label>
                        </div>
                        <div class="col-md-6 mx-auto text-center">
                        <input type="text" class="form-control" placeholder="Team name" name="teamname">
                        </div>

                      </div>

                      
                      <div class="row mt-3" id="player1">
                        <div class="col-md-3">
                          <label for="">Player 1</label>
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Gaming name" name="player1gamename">
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Discord id" name="player1discordid">

                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Steam id" name="player1steamid">
                        </div>
                      </div>
                      

                      <div class="row mt-3" id="player2">
                        <div class="col-md-3">
                          <label for="">Player 2</label>
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Gaming id" name="player2gamename">
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Discord id" name="player2discordid">

                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Steam id" name="player2steamid">
                        </div>
                      </div>

                      <div class="row mt-3" id="player3">
                        <div class="col-md-3">
                          <label for="">Player 3</label>
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Gaming name" name="player3gamename">
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Discord id" name="player3discordid">

                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Steam id" name="player3steamid">
                        </div>
                      </div>

                      
                      <div class="row mt-3" id="player4">
                        <div class="col-md-3">
                          <label for="">Player 4</label>
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Gaming name">
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Discord id">

                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" placeholder="Steam id">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mx-auto text-center my-3">
                          <input type="submit" value="Register" class="btn btn-success">

                        </div>
                      </div>

                    </form>

                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<script>
  $('#player1').hide()
  $('#player2').hide()
  $('#player3').hide()
  $('#player4').hide()
  modevalue=()=>{
    let value = $('.mode').val()
    if(value=='Solo'){
      $('#player1').slideDown(500)
      $('#player2').slideUp(500)
      $('#player3').slideUp(500)
      
      
    }
    else if(value=='Duos'){
      
      $('#player1').slideDown(500)
      $('#player2').slideDown(500)
      $('#player3').slideUp(500)
      
    }
    else if(value=='Trios'){
      
      $('#player1').slideDown(500)
      $('#player2').slideDown(500)
      $('#player3').slideDown(500)
    }
  }
  

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
</body>
</html>
@endsection