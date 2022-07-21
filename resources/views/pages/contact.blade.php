@extends('layouts.app')

@section('title')
    TH-Events : Contact Us
@endsection

@section('content')
    <!-- ***** Pages Heading Start ***** -->
    <div class="page-heading normal-space">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h6>TH-Events</h6>
              <h2>Get In Touch</h2>
              <span><a href="{{ route('index') }}">Home</a> > Contact Us</span>
              <div class="buttons">
                <div class="main-button">
                  <a href="{{ route('booking-events.index') }}">Explore Our Events</a>
                </div>
                <div class="border-button">
                  <a href="#">Create Your Events</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- ***** Pages Heading End ***** -->

    <!-- ***** Get In Touch  Start ***** -->
    <div class="item-details-page">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h2>Get In <em>Touch</em>.</h2>
              </div>
            </div>
            <div class="col-lg-12">
              <form id="contact" action="" method="POST">
                @csrf
                <div class="row">
                  <div class="col-lg-4">
                    <fieldset>
                      <label for="title">name</label>
                      <input type="text" name="name" id="title" placeholder="Name" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label for="description">Email</label>
                      <input type="email" name="email" id="description" placeholder="Email" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label for="username">Subject</label>
                      <input type="text" name="subject" id="username" placeholder="Subject" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <label for="price">Message</label><br/>
                      <textarea name="message" id="description" row="5" placeholder="Message" autocomplete="on" required></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-8 justify-content-center">
                    <fieldset>
                      <button type="submit" id="form-submit" class="orange-button">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    <!-- ***** Get In Touch End ***** -->
@endsection