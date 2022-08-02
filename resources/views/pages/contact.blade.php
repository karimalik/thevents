@extends('layouts.main')

@section('title')
    TH-Events : Contact Us
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
                        <h3>Contact Us</h3>
                    </div>
                    <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href=" {{ route('index') }} ">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Page Title  ====-->

    <section class="section contact-form">
        <div class="container">
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show col-12 text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif 

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-12">
                    <div class="section-title">
                        <h3>Get in <span class="alternate">Touch</span></h3>
                        <p>Do you have a question? Leave us a message and one of our experts will contact you</p>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('contact.store') }}" class="row">
                @csrf
                <div class="col-md-6">
                    <input type="text" class="form-control main @error('name') is-invalid @enderror " name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control main @error('email') is-invalid @enderror " name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control main @error('phone') is-invalid @enderror " name="phone" id="phone" placeholder="Phone" required value="{{ old('phone') }}">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <textarea name="message" id="message" class="form-control main @error('message') is-invalid @enderror " rows="10" placeholder="Your Message" required value="{{ old('message') }}"></textarea>
                    @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-main-md">Send Message</button>
                </div>
            </form>
        </div>
    </section>
@endsection
