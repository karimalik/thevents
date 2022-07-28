@extends('layouts.main')

@section('title')
    TH-Events : Home : Booking Events
@endsection

@section('content')
    <!--============================
    =            Banner            =
    =============================-->

    <section class="banner bg-banner-one overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Content Block -->
                    <div class="block">
                        <!-- Coundown Timer -->
                        {{-- <div class="timer"></div> --}}
                        <h1>TH Events</h1>
                        <h6>
                            EventBookings is an affordable and powerful event ticketing platform for event organisers, promoters, and managers. Easily create, promote and sell tickets to your events of any type and size.
                        </h6>
                        <!-- Action Button -->
                        <a href="#" class="btn btn-white-md">Create Event</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Banner  ====-->

    <!--===========================
    =            About            =
    ============================-->

    <section class="section about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="image-block bg-about">
                        <img class="img-fluid" src="assets/images/speakers/business-3d-black1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 align-self-center">
                    <div class="content-block">
                        <h2>About TH <span class="alternate">Eventre</span></h2>
                        <div class="description-one">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.
                            </p>
                        </div>
                        <div class="description-two">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut labore et dolore magna aliq enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-main-md">Create Event</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('about-us') }}" class="btn btn-transparent-md">Read more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of About  ====-->

    <!--================================
    =          Booking Events          =
    =================================-->

    <section class="news section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Booking <span class="alternate">Events</span></h3>
                        <p>Enter the world of events by consulting our current and upcoming events.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8 col-10 m-auto">
                    <div class="blog-post">
                        <div class="post-thumb">
                            <a href="news-single.html">
                                <img src="assets/images/news/post-thumb-one.jpg" alt="post-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="date">
                                <h4>20<span>May</span></h4>
                            </div>
                            <div class="post-title">
                                <h2><a href="news-single.html">Elementum purus id ultrices.</a></h2>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa fa-user-o"></i>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">350</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comments-o"></i>
                                        <a href="#">30</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-10 m-auto">
                    <div class="blog-post">
                        <div class="post-thumb">
                            <a href="news-single.html">
                                <img src="assets/images/news/post-thumb-two.jpg" alt="post-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="date">
                                <h4>20<span>May</span></h4>
                            </div>
                            <div class="post-title">
                                <h2><a href="news-single.html">Elementum purus id ultrices.</a></h2>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa fa-user-o"></i>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">350</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comments-o"></i>
                                        <a href="#">30</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-md-auto col-sm-8 col-10 m-auto">
                    <div class="blog-post">
                        <div class="post-thumb">
                            <a href="news-single.html">
                                <img src="assets/images/news/post-thumb-three.jpg" alt="post-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="date">
                                <h4>20<span>May</span></h4>
                            </div>
                            <div class="post-title">
                                <h2><a href="news-single.html">Elementum purus id ultrices.</a></h2>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa fa-user-o"></i>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">350</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comments-o"></i>
                                        <a href="#">30</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center">
                        <a href="#" class="btn btn-main-md">View More</a>
                    </nav>
                </div>
            </div>
                
            </div>
        </div>
    </section>

    <!--====  End of News Posts  ====-->

    <section class="cta-ticket bg-ticket overlay-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Get ticket info -->
                    <div class="content-block">
                        <h2>Create Your Events <span class="alternate">Now!</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmtempor incidi</p>
                        <a href="#" class="btn btn-main-md">Create Event</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-block"><img src="assets/images/speakers/business-3d.png" alt="" class="img-fluid"></div>
    </section>

    <!--====  End of Call to Action Ticket  ====-->

    <!--==============================
    =            Sponsors            =
    ===============================-->

    <section class="sponsors section bg-sponsors overlay-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Our <span class="alternate">Sponsors</span></h3>
                        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor incididunt ut labore dolore</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Title -->
                    <div class="block text-center">
                        <!-- Sponsors image list -->
                        <ul class="list-inline sponsors-list">
                            <li class="list-inline-item">
                                <div class="image-block text-center">
                                    <a href="#">
                                        <img src="assets/images/sponsors/TH-Academy.png" alt="sponsors-logo" class="img-fluid">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="image-block text-center">
                                    <a href="#">
                                        <img src="assets/images/sponsors/logo-somkeng.png" alt="sponsors-logo" class="img-fluid">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="image-block text-center">
                                    <a href="#">
                                        <img src="assets/images/sponsors/masta.jpg" alt="sponsors-logo" class="img-fluid">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Title -->
                    <div class="sponsor-btn text-center">
                        <a href="#" class="btn btn-main-md">Become a sponsor</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Sponsors  ====-->
@endsection
