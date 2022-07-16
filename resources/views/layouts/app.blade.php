<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="author" content="TH-Consulting">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Bootstrap core CSS -->
    <link href="{{asset('folders/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('folders/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('folders/assets/css/templatemo-liberty-market.css')}}">
    <link rel="stylesheet" href="{{asset('folders/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('folders/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>
<body>
<!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="folders/assets/images/logo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="" class="active">Home</a></li>
                            <li><a href="explore.html">Explore</a></li>
                            <li><a href="details.html">Item Details</a></li>
                            <li><a href="author.html">Author</a></li>
                            <li><a href="create.html">Create Yours</a></li>
                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
   <!-- ***** Header Area End ***** -->

   @yield('content')
 
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <p>Copyright © 2022 <a href="#">TH-Events</a> All rights reserved.
            &nbsp;&nbsp;
            Designed by <a title="HTML CSS Templates" rel="sponsored" href="#" target="_blank">TH-Consulting</a></p>
            </div>
        </div>
        </div>
   </footer>
   <!-- ***** Footer End ***** -->



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('folders/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('folders/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('folders/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('folders/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('folders/assets/js/wow.js')}}"></script>
  <script src="{{asset('folders/assets/js/tabs.js')}}"></script>
  <script src="{{asset('folders/assets/js/popup.js')}}"></script>
  <script src="{{asset('folders/assets/js/custom.js')}}"></script>
</body>
</html>
