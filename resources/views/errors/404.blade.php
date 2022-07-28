@extends('layouts.main')

@section('title')
    TH Events : 404 error
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
                        <h3>Error Page</h3>
                    </div>
                    <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href=" {{ route('index') }} ">Home</a></li>
                    <li class="breadcrumb-item active">Error Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Page Title  ====-->

    <!--===================================
    =            Error Section            =
    ====================================-->

    <section class="section error">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="block text-center">
                        <img src="assets/images/404.png" class="img-fluid" alt="404">
                        <h3>Oops!... <span>Page Not Found.</span></h3>
                        <a href=" {{ route('index') }} " class="btn btn-main-md">Go to home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Error Section  ====-->
@endsection