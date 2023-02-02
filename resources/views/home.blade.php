@extends('main')
@section('title')
    Home
@endsection
@section('content')

    <!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span style="color: white" class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Himpunan Mahasiswa Teknik Informatika</span>
    </div>
  </div>
  <div class="col-md-10 offset-md-1">
  <!-- Container (About Section) -->
  <div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center" style="color: white">Sejarah Himpunan Teknik Informatika</h3>
    <p class="w3-center"style="color: white">Bina Darma</p>
    <p style="color: white">We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
      qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <br>
    <div class="container bgimg-2">
      
    </div>
   
  </div>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>
  
  <!-- Third Parallax Image with Portfolio Text -->
  <div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
     
    </div>
    <div class="w3-container  w3-padding-64 w3-theme-l5" id="contact">
      <div class="w3-row ">
        <div class="w3-col m5 w3-white">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar"  style="color: black"><strong><h2>Contact Us</h2></strong></span></div> <hr>

          <p style="color: black;" ><strong> Universitas Bina Darma </strong></p>
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
          <button type="submit" class="w3-button w3-right w3-theme bg-info">Send</button>
          </form>
        </div>
      </div>
    </div>
    
    
    
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
      <h4 style="color: white">Follow Us</h4>
      <a class="w3-button w3-large w3-teal" href="https://id-id.facebook.com/UBDPalembang/" title="Facebook"><i class="bi bi-facebook"></i></a>
      <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="bi bi-twitter"></i></a>
      <a class="w3-button w3-large w3-teal" href="https://www.youtube.com/channel/UCAyNRvzKH4aYLIzjjQs3jVQ" title="youtube"><i class="bi bi-youtube"></i></a>
      <a class="w3-button w3-large w3-teal" href="https://www.instagram.com/himtik_binadarma/?hl=id" title="Google +"><i class="bi bi-instagram"></i></a>
      <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="bi bi-linkedin"></i></a>
    
    
      <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
        <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
        <a class="w3-button w3-theme" href="/"><span class="w3-xlarge">
        <i class="fa fa-chevron-circle-up"></i></span></a>
      </div>
    </footer>
          </div>
  </div>


</div>
@endsection