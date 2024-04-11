@extends('layouts.package')
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/place-4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Places to Travel</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Packages <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Best Place Destination</h2>
          </div>
        </div>
        <div class="row">
            @foreach ($destinations as $des )
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
				<a href="{{ url('destination-place', $des->id) }}" class="img" style="background-image:url('{{ asset('images/'.$des->image) }}');"></a>
        				<div class="text">
        					<h3>{{$des->title}}</h3>
        					<span>8 Days</span>
        				</div>
        			</a>
        		</div>
        	</div>
            @endforeach
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
						<span class="price">Rs 20000/person</span>
						<span class="days">10 Days Tour</span>
						<h3><a href="{{url('destination-place',$destination->id)}}">
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

		{{ $destinations->links() }}

    	</div>
    </section>
@endsection

