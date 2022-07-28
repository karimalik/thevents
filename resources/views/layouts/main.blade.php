<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Event and Conference booking">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="WebixCM">
  <meta name="generator" content="Event Bookimg">

  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('assets/plugins/font-awsome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="{{ asset('assets/plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="{{ asset('assets/plugins/slick/slick.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/plugins/slick/slick-theme.css')}}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{ asset('assets/images/logothevents.png')}}" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->
<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
    <!-- logo -->
    <a class="navbar-brand" href="index.html">
      <img src="assets/images/logo-events.png" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">Home
                <span>/</span>
                </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('about-us') }}">About Us
                <span>/</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('booking-events.index') }}">Booking Events
                <span>/</span>
                </a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{ route('contact-us') }}">Contact Us<span>/</span></a>
            </li>
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}">Dashboard<span>/</span></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">Sign In<span>/</span></a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('register') }}">Sign Up<span>/</span></a>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>
      <a href="#" class="ticket">
        <img src="assets/images/icon/ticket.png" alt="ticket">
        <span>Create Event</span>
      </a>
    </div>
  </div>
</nav>

<!--====  End of Navigation Section  ====-->


@yield('content')

<!--==============================================
=            Call to Action Subscribe            =
===============================================-->

<section class="cta-subscribe bg-subscribe overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mr-auto">
				<!-- Subscribe Content -->
				<div class="content">
					<h3>Subscribe to Our <span class="alternate">Newsletter</span></h3>
				</div>
			</div>
			<div class="col-md-6 ml-auto align-self-center">
				<!-- Subscription form -->
				<form action="#" class="row">
					<div class="col-lg-8 col-md-12">
						<input type="email" class="form-control main white mb-lg-0" placeholder="Email">
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="subscribe-button">
							<button class="btn btn-main-md">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--====  End of Call to Action Subscribe  ====-->

<!--================================
=            Google Map            =
=================================-->
<section class="map">
	<!-- Google Map -->
	<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="assets/images/icon/marker.png" data-marker-name="THEvents"></div>
	<div class="address-block">
		<h4>Docklands Convention</h4>
		<ul class="address-list p-0 m-0">
			<li><i class="fa fa-home"></i><span>Akwa BP 7380, <br>Douala, Cameroon.</span></li>
			<li><i class="fa fa-phone"></i><span>[+237] 655 299 168</span></li>
		</ul>
		<a href="#" class="btn btn-white-md">Get Direction</a>
	</div>
</section>
<!--====  End of Google Map  ====-->

<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <div class="footer-logo">
            <img src="assets/images/logo-events.png" alt="logo" class="img-fluid">
          </div>
          <ul class="social-links-footer list-inline">
            <li class="list-inline-item">
              <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#"><i class="fa fa-behance"></i></a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="copyright-text">
          <p><a href="index.html">TH Events</a> &copy; 2022, Designed &amp; Developed by <a href="https://webixcm.online/">WebixCM</a></p>
        </div>
      </div>
      <div class="col-md-6">
        <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
  </div>
</footer>


  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
  <!-- Shuffle -->
  <script src="{{ asset('assets/plugins/shuffle/shuffle.min.js')}}"></script>
  <!-- Magnific Popup -->
  <script src="{{ asset('assets/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
  <!-- Slick Carousel -->
  <script src="{{ asset('assets/plugins/slick/slick.min.js')}}"></script>
  <!-- SyoTimer -->
  <script src="{{ asset('assets/plugins/syotimer/jquery.syotimer.min.js')}}"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
  <script src="{{ asset('assets/plugins/google-map/gmap.js')}}"></script>
  <!-- Custom Script -->
  <script src="{{ asset('assets/js/script.js')}}"></script>
</body>

</html>



