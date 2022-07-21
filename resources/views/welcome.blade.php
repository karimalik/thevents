@extends('layouts.app')

@section('title')
    TH-Events : Home : Booking Events
@endsection

@section('content')
  <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
            <div class="header-text">
                <h4>TH-Events</h4>
                <h2>Créez &amp; Explore Top Events.</h2>
                <p style="font-size: 20px;">
                    <strong>TH-Events</strong> est une plateforme de booking events. Elle vous permet de créer et promouvoir vos événnements (Formation, Conférence, etc..).
                </p>
                <div class="buttons">
                <div class="border-button">
                    <a href="{{ route('booking-events.index') }}">Explore Top Events</a>
                </div>
                <div class="main-button">
                    <a href="https://youtube.com/templatemo" target="_blank">Watch Our Videos</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="owl-banner owl-carousel">
                    <div class="item">
                    <img src="folders/assets/images/banner-01.png" alt="">
                    </div>
                    <div class="item">
                    <img src="folders/assets/images/banner-02.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
  <!-- ***** Main Banner Area End ***** -->

  <!-- ***** Collection Start ***** -->
    <div class="categories-collections">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="categories">
                <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>Explorez Nos Evénements Par <em>Catégories</em>.</h2>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="item">
                    <div class="icon">
                        <img src="folders/assets/images/icon-01.png" alt="">
                    </div>
                    <h4>Blockchain</h4>
                    <div class="icon-button">
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="item">
                    <div class="icon">
                        <img src="folders/assets/images/icon-02.png" alt="">
                    </div>
                    <h4>Digital Art</h4>
                    <div class="icon-button">
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="item">
                    <div class="icon">
                        <img src="folders/assets/images/icon-03.png" alt="">
                    </div>
                    <h4>Music Art</h4>
                    <div class="icon-button">
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="item">
                    <div class="icon">
                        <img src="folders/assets/images/icon-04.png" alt="">
                    </div>
                    <h4>Virtual World</h4>
                    <div class="icon-button">
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="item">
                    <div class="icon">
                        <img src="folders/assets/images/icon-05.png" alt="">
                    </div>
                    <h4>Valuable</h4>
                    <div class="icon-button">
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="item">
                    <div class="icon">
                        <img src="folders/assets/images/icon-06.png" alt="">
                    </div>
                    <h4>Triple NFT</h4>
                    <div class="icon-button">
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-12">
            <div class="collections">
                <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>Explorez Nos <em>Evénements</em>.</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-collection owl-carousel">
                    <div class="item">
                        <img src="folders/assets/images/collection-01.jpg" alt="">
                        <div class="down-content">
                        <h4>Mutant Bored Ape Yacht Club</h4>
                        <span class="collection">Items In Collection:<br><strong>310/340</strong></span>
                        <span class="category">Category:<br><strong>Digital Crypto</strong></span>
                        <div class="main-button">
                            <a href="explore.html">Explore Mutant</a>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="folders/assets/images/collection-01.jpg" alt="">
                        <div class="down-content">
                        <h4>Bored Ape Kennel Club</h4>
                        <span class="collection">Items In Collection:<br><strong>324/324</strong></span>
                        <span class="category">Category:<br><strong>Visual Art</strong></span>
                        <div class="main-button">
                            <a href="explore.html">Explore Bored Ape</a>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="folders/assets/images/collection-01.jpg" alt="">
                        <div class="down-content">
                        <h4>Genesis Collective Statue</h4>
                        <span class="collection">Items In Collection:<br><strong>380/394</strong></span>
                        <span class="category">Category:<br><strong>Music Art</strong></span>
                        <div class="main-button">
                            <a href="explore.html">Explore Genesis</a>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="folders/assets/images/collection-01.jpg" alt="">
                        <div class="down-content">
                        <h4>Worldwide Artwork Ground</h4>
                        <span class="collection">Items In Collection:<br><strong>426/468</strong></span>
                        <span class="category">Category:<br><strong>Blockchain</strong></span>
                        <div class="main-button">
                            <a href="explore.html">Explore Worldwide</a>
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
    </div>
  <!-- ***** Collection End ***** -->
@endsection