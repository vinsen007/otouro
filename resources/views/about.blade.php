@extends('layouts.package')
    @section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/rishikesh.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
              <h1 class="mb-3 bread">Places to Travel</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </section>
    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
          	<h2 class="mb-4">It's time to start your adventure</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="{{route('packages')}}" class="btn btn-primary py-3 px-4">Explore Destinations</a></p>
          </div>
          <div class="col-md-6">
          	<div class="row">
          		<div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-paragliding"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Activities</h3>
		                <p>We Offer Tourist activities cater to every interest, from sightseeing and cultural experiences to outdoor adventures and relaxation.</p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-route"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Travel Arrangements</h3>
		                <p>we specialize in crafting unforgettable travel experiences tailored to your desires.</p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-tour-guide"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Private Guide</h3>
		                <p>Opting for a private guide offers personalized insights and seamless navigation through your destination</p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-map"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Location Manager</h3>
		                <p>A location manager serves as your trusted ally in navigating unfamiliar terrain, ensuring smooth logistics and memorable experiences. </p>
		              </div>
		            </div>
		          </div>
          	</div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image:url(images/about.jpg);"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center mb-4">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Successful Tours</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center mb-4">
		              <div class="text">
		                <strong class="number" data-number="24000">0</strong>
		                <span>Happy Tourist</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center mb-4">
		              <div class="text">
		                <strong class="number" data-number="200">0</strong>
		                <span>Place Explored</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
  <!-- loader -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSStYgOR8NFDCznI_K9OwvunIWGuWIPPA&callback=initMap"></script>
  <script src="js/google-map.js"></script>
  @endsection


