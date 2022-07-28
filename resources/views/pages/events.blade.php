@extends('layouts.main')

@section('title')
    TH-Events : Booking Events
@endsection

@section('content')
    <!--================================
    =            Page Title            =
    =================================-->

    <section class="page-title bg-title overlay-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="title">
                        <h3>Our News</h3>
                    </div>
                    <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href=" {{ route('index') }} ">Home</a></li>
                    <li class="breadcrumb-item active">Booking Events</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Page Title  ====-->


    <!--================================
    =            News Posts            =
    =================================-->

    <section class="news section">
        <div class="container">
            <div class="row justify-content-center mt-30">
                <div class="col-lg-4 col-md-6 col-sm-8">
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
                <div class="col-lg-4 col-md-6 col-sm-8">
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
                <div class="col-lg-4 col-md-6 col-sm-8">
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
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="prev">
                                <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                <span class="sr-only">prev</span>
                            </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of News Posts  ====-->
@endsection