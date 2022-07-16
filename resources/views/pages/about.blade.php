@extends('layouts.app')

@section('title')
    TH-Events : About-Us : Booking events In Cameroon and Africa
@endsection

@section('content')
    <!-- ***** Main Start *****-->
    <div class="page-heading normal-space">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h6>TH Events</h6>
              <h2>About Us</h2>
              <span><a href="{{ route('index') }}">Home</a> > About Us</span>
              <div class="buttons">
                <div class="main-button">
                  <a href="#">Explore Our Events</a>
                </div>
                <div class="border-button">
                  <a href="#">Create Your Events</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- ***** Main End *****-->

    <!-- ***** Section Start *****-->
    <div class="item-details-page">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h2>About <em>TH-Events</em>.</h2>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="left-image">
                <img src="folders/assets/images/item-details-01.jpg" alt="" style="border-radius: 20px;">
              </div>
            </div>
            <div class="col-lg-5 align-self-center">
              <h4>About-Us</h4>
              {{-- <span class="author">
                <img src="folders/assets/images/author-02.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
              </span> --}}
                <p>
                 Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              <div class="row">
                <div class="col-3">
                  <span class="bid">
                   <i class="fas fa-home-alt" style="font-size: 28px;" ></i><br><span class="text-info">Akwa,Douala</span><br>
                  </span>
                </div>
                <div class="col-4">
                  <span class="owner">
                    <i class="fas fa-phone-alt" style="font-size: 28px;" ></i><br><span class="text-info" > (237) 655299168 </span><br>
                  </span>
                </div>
                <div class="col-5">
                  <span class="ends">
                    <i class="fas fa-contact-card" style="font-size: 28px;" ></i><br><span class="text-info">infos@th-events.com</span><br>
                  </span>
                </div>
              </div> <br/>
              <div class="main-button">
                <a href="#">Contact Us</a>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="current-bid">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mini-heading"><h4>Current Events</h4></div>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                          <option selected>Sort By: Latest</option>
                          <option type="checkbox" name="option1" value="old">Sort By: Oldest</option>
                          <option value="low">Sort By: Lowest</option>
                          <option value="high">Sort By: Highest</option>
                      </select>
                  </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="item">
                      <div class="left-img">
                        <img src="folders/assets/images/current-01.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>David Walker</h4>
                        <a href="#">@davidwalker</a>
                        <div class="line-dec"></div>
                        <h6>Bid: <em>0.06 ETH</em></h6>
                        <span class="date">24/07/2022, 22:00</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="item">
                      <div class="left-img">
                        <img src="folders/assets/images/current-02.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>David Walker</h4>
                        <a href="#">@davidwalker</a>
                        <div class="line-dec"></div>
                        <h6>Bid: <em>0.06 ETH</em></h6>
                        <span class="date">24/07/2022, 22:00</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="item">
                      <div class="left-img">
                        <img src="folders/assets/images/current-03.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>David Walker</h4>
                        <a href="#">@davidwalker</a>
                        <div class="line-dec"></div>
                        <h6>Bid: <em>0.06 ETH</em></h6>
                        <span class="date">24/07/2022, 22:00</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="item">
                      <div class="left-img">
                        <img src="folders/assets/images/current-02.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>David Walker</h4>
                        <a href="#">@davidwalker</a>
                        <div class="line-dec"></div>
                        <h6>Bid: <em>0.06 ETH</em></h6>
                        <span class="date">24/07/2022, 22:00</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="item">
                      <div class="left-img">
                        <img src="folders/assets/images/current-04.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>David Walker</h4>
                        <a href="#">@davidwalker</a>
                        <div class="line-dec"></div>
                        <h6>Bid: <em>0.06 ETH</em></h6>
                        <span class="date">24/07/2022, 22:00</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="item">
                      <div class="left-img">
                        <img src="folders/assets/images/current-01.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>David Walker</h4>
                        <a href="#">@davidwalker</a>
                        <div class="line-dec"></div>
                        <h6>Bid: <em>0.06 ETH</em></h6>
                        <span class="date">24/07/2022, 22:00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- ***** Section End *****-->
@endsection