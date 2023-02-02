<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://github.com/zeinniko/zeinniko.github.io/blob/main/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{
            background-color: rgb(180, 82, 36);
        }
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        body, html {
          height: 100%;
          color: #777;
          line-height: 1.8;
        }
        
        /* Create a Parallax Effect */
        .bgimg-1, .bgimg-2, .bgimg-3 {
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
        
        /* First image (Logo. Full height) */
        .bgimg-1 {
          background-image: url('https://static.dezeen.com/uploads/2018/10/bauhaus-100-years-dezeen-guide-architecture-design_dezeen_2364_col_0.jpg');
          min-height: 100%;
        }
        
        /* Second image (Portfolio) */
        .bgimg-2 {
          background-image: url("http://binus.ac.id/knowledge/wp-content/uploads/2021/12/Screen-Shot-2021-12-29-at-14.21.05-678x342.png");
          min-height: 400px;
        }
        
        /* Third image (Contact) */
        .bgimg-3 {
          background-image: url("https://i.ytimg.com/vi/XrH-YOWQqTg/sddefault.jpg");
          min-height: 400px;
        }
        
        .w3-wide {letter-spacing: 10px;}
        .w3-hover-opacity {cursor: pointer;}
        
        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1600px) {
          .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
            min-height: 400px;
          }
        }
        </style>
</head>
<body>
    <nav class="navbar  navbar-expand-lg" style="background-color: rgb(51, 47, 47)">
        <div class="container col-md-8 offset-md-2"> 
            <a href="" class="navbar-brand">
                <p ><img src="../../img/him.png" style="float:left;" height="100">
                </p>
            </a>
            <button type="button" class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#menusaya">
        <i class="navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="menusaya">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item " >
            <a href="{{url('/')}}" class="w3-bar-item w3-button w3-hide-small" style="color: white "><i class="fa fa-home"></i> Beranda</a>
        </li>
        <li class="nav-item">
            <a href="{{url('visi-misi')}}" class="w3-bar-item w3-button w3-hide-small" style="color: white"><i class="fa fa-user"></i> Visi-Misi</a>
        </li>
        <li class="nav-item">
            <a href="/berita-acara" class="w3-bar-item w3-button w3-hide-small" style="color: white" ><i class="fa fa-th" ></i> Berita Acara</a>
        </li>
    @if (Auth::user())
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
              Akun Saya
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('profil')}}">Profil</a></li>
              <li><a class="dropdown-item" href="{{url('berita')}}">Berita Acara</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
            </ul>
        </li>
    @else
        <li class="nav-item">
       <a href=""></a>
       <a href="/login" class="w3-bar-item w3-button w3-hide-small" style="color: white"><i class="fa fa-envelope"></i> Login</a>   
        </li>
        {{-- <li class="nav-item">
            <a href="{{url('register')}}" class="nav-link">Register</a>
        </li> --}}
    @endif 
    </ul>
        </div>
        </div>
    </nav>
    <hr  style="color: black">
    
    @yield('content')
    
    <script>
        // Modal Image Gallery
        function onClick(element) {
          document.getElementById("img01").src = element.src;
          document.getElementById("modal01").style.display = "block";
          var captionText = document.getElementById("caption");
          captionText.innerHTML = element.alt;
        }
        
        // Change style of navbar on scroll
        window.onscroll = function() {myFunction()};
        function myFunction() {
            var navbar = document.getElementById("myNavbar");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
            } else {
                navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
            }
        }
        
        // Used to toggle the menu on small screens when clicking on the menu button
        function toggleFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>