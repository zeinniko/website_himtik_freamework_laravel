@extends('main')
@section('title')
    Home
@endsection
@section('content')
    <div class="container-fluid">
      <div style="background-color: white" class="col-md-10 offset-md-1">
      <div class="col-md-8 offset-md-2" >
        <div class="zeinniko-container" id="services" style="margin-top:75px">
            <h1 class="zeinniko-xxxlarge zeinniko-text-red"  style="color: black"><b>Visi.</b></h1>
            <hr style="width:50px;border:5px solid blue" class="zeinniko-round">
            <p  style="color: black">Menjadikan himpunan mahasiswa teknik informatika sebagai wadah permersatu, penampung aspirasi dan penyalur bakat mahasiswa prodi Teknik Informatika sehingga terwujud himtik yang solid, bersinergi, inovatif dan berkembang</p>
          </div>
          
          <div class="zeinniko-container" id="designers" style="margin-top:75px">
            <h1 class="zeinniko-xxxlarge zeinniko-text-red"  style="color: black"><b>Misi.</b></h1>
            <hr style="width:50px;border:5px solid blue" class="zeinniko-round">
            <p  style="color: black">1. Menjadi wadah kegiatan, penyalur aspirasi, minat, bakat dan tempat tukar pikiran dengan asas kekeluargaan <br>
              2. Menjalin Hubungan yang hubungan yang baik dengan civitas,alumni,serta organisasi atau ukm yang lainnya khususnya di lingkungan Universitas Bina Darma<br>
              3. Menyeleggarakan dan melanjutkan kegiatan yang dapat mendukung tercapainya anggota yang aktif, memiliki solidaritas, berwawasan dan kompeten <br>
              4. Mengoptimalisasikan fungsi dari setiap bidang </p>
          </div>
        </div>
      </div>
          <br>
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar"  style="color: white">Contact Us</span></div>
      <h3 style="color: white">Address</h3>
      <p style="color: white">Swing by for a cup of coffee, or whatever.</p>
      <p style="color: white"><i class="fa fa-map-marker w3-text-teal w3-xlarge" style="color: white"></i>Palembanng</p>
      <p style="color: white"><i class="fa fa-phone w3-text-teal w3-xlarge" style="color: white"></i>+00 55667721</p>
      <p style="color: white"><i class="fa fa-envelope-o w3-text-teal w3-xlarge" style="color: white"></i>HImtikBinadarma@gmail.com</p>
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
    <a class="w3-button w3-theme" href="/visi-misi"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
      </div>
    </div>
@endsection