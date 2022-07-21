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
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                            <li><a href="{{ route('booking-events.index') }}">Events</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
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

    <!-- ***** Create Events Satrt ***** -->
    <div class="create-nft">
        <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <div class="section-heading">
                <div class="line-dec"></div>
                <h2>Create Your First Events.</h2>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="main-button">
                <a href="#">Create Your Events</a>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="item first-item">
                <div class="number">
                <h6>1</h6>
                </div>
                <div class="icon">
                 <img src="folders/assets/images/icon-02.png" alt="">
                </div>
                <h4>Set Up Your Wallet</h4>
                <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="item second-item">
                <div class="number">
                <h6>2</h6>
                </div>
                <div class="icon">
                    <img src="folders/assets/images/icon-04.png" alt="">
                </div>
                <h4>Add Your Digital NFT</h4>
                <p>There are 5 different HTML pages included in this NFT <a href="https://templatemo.com/page/1" target="_blank" rel="nofollow">website template</a>. You can edit or modify any section on any page as you required.</p>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="item">
                <div class="icon">
                 <img src="folders/assets/images/icon-06.png" alt="">
                </div>
                <h4>Sell Your NFT &amp; Make Profit</h4>
                <p>If you would like to support our TemplateMo website, please visit <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">our contact page</a> to make a PayPal contribution. Thank you.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
  <!-- ***** Create Events End ***** -->
 
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
