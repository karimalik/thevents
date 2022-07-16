@extends('layouts.app')

@section('title')
    TH-Events : Booking Events
@endsection

@section('content')
    <!-- ***** Pages Heading Start  ***** -->
    <div class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h6>TH-Events</h6>
              <h2>Explore Our Events</h2>
              <span><a href="{{ route('index') }}">Home</a> > Booking Events</span>
            </div>
          </div>
        </div>
        <div class="featured-explore">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="owl-features owl-carousel">
                  <div class="item">
                    <div class="thumb">
                      <img src="folders/assets/images/featured-01.jpg" alt="" style="border-radius: 20px;">
                      <div class="hover-effect">
                        <div class="content">
                          <h4>Triple Mutant Ape Bored</h4>
                          <span class="author">
                            <img src="folders/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="folders/assets/images/featured-02.jpg" alt="" style="border-radius: 20px;">
                      <div class="hover-effect">
                        <div class="content">
                          <h4>Bored Ape Kennel Club</h4>
                          <span class="author">
                            <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="folders/assets/images/featured-03.jpg" alt="" style="border-radius: 20px;">
                      <div class="hover-effect">
                        <div class="content">
                          <h4>Genesis Club by KMT</h4>
                          <span class="author">
                            <img src="folders/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="folders/assets/images/featured-04.jpg" alt="" style="border-radius: 20px;">
                      <div class="hover-effect">
                        <div class="content">
                          <h4>Crypto Aurora Guy</h4>
                          <span class="author">
                            <img src="folders/assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                            <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- ***** Pages Heading End  ***** -->

    <!-- ***** All Events Start ***** -->
    <div class="discover-items">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h2>Explore Our <em>Events</em>.</h2>
              </div>
            </div>
            <div class="col-lg-7">
              <form id="search-form" name="gs" method="submit" role="search" action="#">
                <div class="row">
                  <div class="col-lg-4">
                    <fieldset>
                        <input type="text" name="keyword" class="searchText" placeholder="Type Something..." autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                        <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                            <option selected>All Categories</option>
                            <option type="checkbox" name="option1" value="Music">Music</option>
                            <option value="Digital">Digital</option>
                            <option value="Blockchain">Blockchain</option>
                            <option value="Virtual">Virtual</option>
                        </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-2">                        
                    <fieldset>
                        <button class="main-button">Search</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-3">
              <div class="item">
                <div class="row">
                  <div class="col-lg-12">
                    <img src="folders/assets/images/discover-03.jpg" alt="" style="border-radius: 20px;">
                    <h4>Pixel Sand Box</h4>
                  </div>
                  <div class="col-lg-12">
                    <div class="line-dec"></div>
                    <div class="row">
                      <div class="col-6">
                        <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                      </div>
                      <div class="col-6">
                        <span>Ends In: <br> <strong>28th Nov</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="#">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="item">
                <div class="row">
                  <div class="col-lg-12">
                    <img src="folders/assets/images/discover-04.jpg" alt="" style="border-radius: 20px;">
                    <h4>Another Half Ape</h4>
                  </div>
                  <div class="col-lg-12">
                    <div class="line-dec"></div>
                    <div class="row">
                      <div class="col-6">
                        <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                      </div>
                      <div class="col-6">
                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="#">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="item">
                <div class="row">
                  <div class="col-lg-12">
                    <img src="folders/assets/images/discover-06.jpg" alt="" style="border-radius: 20px;">
                    <h4>Invisible NFT Land</h4>
                  </div>
                  <div class="col-lg-12">
                    <div class="line-dec"></div>
                    <div class="row">
                      <div class="col-6">
                        <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                      </div>
                      <div class="col-6">
                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="#">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="item">
                <div class="row">
                  <div class="col-lg-12">
                    <img src="folders/assets/images/discover-05.jpg" alt="" style="border-radius: 20px;">
                    <h4>Another Half Ape</h4>
                  </div>
                  <div class="col-lg-12">
                    <div class="line-dec"></div>
                    <div class="row">
                      <div class="col-6">
                        <span>Current Bid: <br> <strong>2.64 ETH</strong></span>
                      </div>
                      <div class="col-6">
                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="#">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- ***** All Events End ***** -->
@endsection