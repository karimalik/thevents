@extends('layouts.main')

@section('title')
    TH-Events : About-Us : Booking events In Cameroon and Africa
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
                        <h3>About Us</h3>
                    </div>
                    <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href=" {{ route('index') }} ">Home</a></li>
                    <li class="breadcrumb-item active">About US</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Page Title  ====-->


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
                        <h2>About The <span class="alternate">Eventre</span></h2>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of About  ====-->
@endsection