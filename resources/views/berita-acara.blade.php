@extends('main')
@section('title')
    Home
@endsection
@section('content')
<br>
      <div class="row col-md-10 offset-md-1 mt-3">
        @foreach ($data as $item)
  <div class="col-md-6">
    <div class="card md-6">
      <img src="{{url('images')}}/{{$item->photo}}" alt="Nature" style="width:100%">
              <div class="zeinniko-container">
                <h3><b>{{$item->title}}</b></h3>
              </div>
          
              <div class="zeinniko-container">
                <p>{{$item->description}}</p>
                <div class="zeinniko-row">
                  <div class="zeinniko-col m8 s12">
                    <p><span class="zeinniko-padding-large zeinniko-left"><b>{{$item->date}}</b> <span class="zeinniko-tag"></span></span></p>
                  </div>
                  <div class="zeinniko-col m4 zeinniko-hide-small">
                    <a href="https://www.instagram.com/himtik_binadarma/?hl=id"><p><button class="zeinniko-button zeinniko-padding-large zeinniko-white zeinniko-border"><b>SELENGKAPNYA »</b></button></p></a>
                  </div>
                </div>
              </div>
            </div>
    
    
  </div>
        @endforeach

        <!-- Third Parallax Image with Portfolio Text -->
  <div class=" w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
       
    </div>
    <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
      <div class="w3-row">
        <div class="w3-col m5">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar"  style="color: black">Contact Us</span></div>
          <h3 style="color: black"><strong> Address</strong></h3>
          <p style="color: black;" ><strong> Swing by for a cup of coffee, or whatever.</strong></p>
          <p style="color: black; "><i class="fa fa-map-marker w3-text-teal w3-xlarge" style="color: black"></i><strong>         Palembanng</strong> </p>
          <p style="color: black;"><i class="fa fa-phone w3-text-teal w3-xlarge" style="color: black"></i><strong>          +00 55667721</strong> </p>
          <p style="color: black;: white"><i class="fa fa-envelope-o w3-text-teal w3-xlarge" style="color: black"></i><strong>HImtikBinadarma@gmail.com</strong> </p>
        </div>
        <div class="w3-col m7">
          <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
          <div class="w3-section">      
            <label>Name</label>
            <input class="w3-input" type="text" name="Name" required>
          </div>
          <div class="w3-section">      
            <label>Email</label>
            <input class="w3-input" type="text" name="Email" required>
          </div>
          <div class="w3-section">      
            <label>Message</label>
            <input class="w3-input" type="text" name="Message" required>
          </div>  
          <input class="w3-check" type="checkbox" checked name="Like">
          <label>I Like it!</label>
          <button type="submit" class="w3-button w3-right w3-theme">Send</button>
          </form>
        </div>
      </div>
    </div>
    
    
    
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
      <h4>Follow Us</h4>
      <a class="w3-button w3-large w3-teal" href="https://id-id.facebook.com/UBDPalembang/" title="Facebook"><i class="bi bi-facebook"></i></a>
      <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="bi bi-twitter"></i></a>
      <a class="w3-button w3-large w3-teal" href="https://www.youtube.com/channel/UCAyNRvzKH4aYLIzjjQs3jVQ" title="youtube"><i class="bi bi-youtube"></i></a>
      <a class="w3-button w3-large w3-teal" href="https://www.instagram.com/himtik_binadarma/?hl=id" title="Google +"><i class="bi bi-instagram"></i></a>
      <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="bi bi-linkedin"></i></a>
    
    
      <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
        <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
        <a class="w3-button w3-theme" href="/berita-acara"><span class="w3-xlarge">
        <i class="fa fa-chevron-circle-up"></i></span></a>
      </div>
    </footer>
          </div>
      </div>
      







    {{-- <div class="container-fluid">
      <div class="col-md-6">
      @foreach($data as $item)
        <div class="zeinniko-col l8 s12">
            <div class="zeinniko-card-4 zeinniko-margin zeinniko-white">
              
              <img src="{{url('images')}}/{{$item->photo}}" alt="Nature" style="width:100%">
              <div class="zeinniko-container">
                <h3><b>{{$item->title}}</b></h3>
              </div>
          
              <div class="zeinniko-container">
                <p>{{$item->description}}</p>
                <div class="zeinniko-row">
                  <div class="zeinniko-col m8 s12">
                    <p><span class="zeinniko-padding-large zeinniko-left"><b>{{$item->date}}</b> <span class="zeinniko-tag"></span></span></p>
                  </div>
                  <div class="zeinniko-col m4 zeinniko-hide-small">
                    <p><button class="zeinniko-button zeinniko-padding-large zeinniko-white zeinniko-border"><b>SELENGKAPNYA »</b></button></p>
                  </div>
                </div>
              </div>
            </div>
            <hr>
          </div>
          @endforeach
        </div>    
    </div> --}}
@endsection