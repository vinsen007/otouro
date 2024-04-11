

@extends('layouts.package')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('images/place-4.jpg');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
			data-scrollax-parent="true">
			<div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		<!--	 <a href=""
					class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
					<span class="ion-ios-play"></span>
				</a> -->
				<p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner
					of the world, without going around in circles</p>
				<h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Make Your Tour Amazing With Us</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-wrap-1 ftco-animate p-4">
				<form action="#" class="input-group" method="GET">
						<div class="row">
							<div class="col-lg align-items-end">
								<div class="form-group">
									<label for="#">Destination</label>
									<div class="form-field">
										<div class="icon"><span class="ion-ios-search"></span></div>
										<input type="text" class="form-control" placeholder="Search place">
									</div>
								</div>
							</div>
							{{-- <div class="col-lg align-items-end">
								<div class="form-group">
									<label for="#">Check-in date</label>
									<div class="form-field">
										<div class="icon"><span class="ion-ios-calendar"></span></div>
										<input type="text" class="form-control checkin_date"
											placeholder="Check In Date">
									</div>
								</div>
							</div>
							<div class="col-lg align-items-end">
								<div class="form-group">
									<label for="#">Check-out date</label>
									<div class="form-field">
										<div class="icon"><span class="ion-ios-calendar"></span></div>
										<input type="text" class="form-control checkout_date"
											placeholder="Check Out Date">
									</div>
								</div>
							</div>
							<div class="col-lg align-items-end">
								<div class="form-group">
									<label for="#">Price Limit</label>
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">$5,000</option>
												<option value="">$10,000</option>
												<option value="">$50,000</option>
												<option value="">$100,000</option>
												<option value="">$200,000</option>
												<option value="">$300,000</option>
												<option value="">$400,000</option>
												<option value="">$500,000</option>
												<option value="">$600,000</option>
												<option value="">$700,000</option>
												<option value="">$800,000</option>
												<option value="">$900,000</option>
												<option value="">$1,000,000</option>
												<option value="">$2,000,000</option>
											</select>
										</div>
									</div>
								</div>
							</div> --}}
							<div class="col-lg align-self-end">
								<div class="form-group">
									<div class="form-field">
										<input type="submit" value="Search" class="form-control btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section services-section bg-light">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
				<h2 class="mb-4">It's time to start your adventure</h2>
				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
					paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
					the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
					language ocean.
					A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				<p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services d-block">
							<div class="icon"><span class="flaticon-paragliding"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Activities</h3>
								<p>We Offer Tourist activities cater to every interest, from sightseeing and cultural experiences to outdoor adventures and relaxation.  </p>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services d-block">
							<div class="icon"><span class="flaticon-route"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Travel Arrangements</h3>
								<p>we specialize in crafting unforgettable travel experiences tailored to your desires. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex align-self-stretch ftco-animate">
						<div class="media block-6 services d-block">
							<div class="icon"><span class="flaticon-tour-guide"></span></div>
							<div class="media-body">
								<h3 class="heading mb-3">Private Guide</h3>
								<p> Opting for a private guide offers personalized insights and seamless navigation through your destination</p>
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
						<p>Deside your place with your customization and sellection of best place. We as otouro Provide you Everything you need Everytime you need.</p>
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


<section class="ftco-section ftco-no-pt">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Tour Destination</h2>
			</div>
		</div>
		<div class="row">

			@foreach ($destinations as $destination)
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
				<a href="{{ url('destination-place', $destination->id) }}" class="img" style="background-image:url('{{ asset('images/'.$destination->image) }}');"></a>


						<p>
							{{$destination->category->name}}
						</p>
					</a>
					<div class="text p-4">
						<span class="price">{{$destination->pricing}}</span>
						<span class="days">10 Days Tour</span>
						<h3><a href="{{route('desti.show', $destination->id)}}">
								{{$destination->title}}
							</a></h3>
						<ul>
							<li><span class="flaticon-shower"></span>2</li>
							<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-sun-umbrella"></span></li>
						</ul>
					</div>
				</div>
			</div>
			@endforeach


		</div>
		{{ $destinations->appends(['search' => request()->query('search')])->links() }}
	</div>

</section>

<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_3.jpg);">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<h2 class="mb-4">Tourist Feedback</h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel ftco-owl">
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
									<div class="pl-3">
										<p class="name">John Wick</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
									<div class="pl-3">
										<p class="name">Arpit Parashar</p>
										<span class="position">Business Man</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
									<div class="pl-3">
										<p class="name">Anubhav Rastogi</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
									<div class="pl-3">
										<p class="name">Nehal Sharma</p>
										<span class="position">Doctor</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
									<div class="pl-3">
										<p class="name">Tarun Gill</p>
										<span class="position">Engineer</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Recent Post</h2>
			</div>
		</div>
		<div class="row d-flex">
			@foreach ($recent_post as $recentPost)
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="{{url('blog-single/'.$recentPost->id)}}" class="block-20" style="background-image: url('images/image_1.jpg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<div class="d-flex align-items-center mb-4 topp">
							<div class="one">
								<span class="day">21</span>
							</div>
							<div class="two">
								<span class="yr">2024</span>
								<span class="mos">January</span>
							</div>
						</div>
						<h3 class="heading"><a href="{{url('blog-single/'.$recentPost->id)}}">{{$recentPost->title}}</a></h3>
						<p>{{$recentPost->details}}</p>
					</div>
				</div>
			</div>
            @endforeach

		</div>
	</div>
</section>


@endsection
