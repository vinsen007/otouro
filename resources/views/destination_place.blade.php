@extends('layouts.package')
    @section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('../images/image_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Destination Details</h1>
                    {{-- <p class="breadcrumbs"><span class="mr-2"><a href="">Home <i class=""></i></a></span> </p> --}}
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-md-last ftco-animate py-md-5 mt-md-5">
                    <h2 class="mb-3">{{$destination->title}}</h2>

                    <p>
                        <img src="images/bali.jpeg" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3 mt-5">{{$destination->description}}</h2>
                    <p>
                       {{$destination->content}}
                    </p>
                    <li class="nav-item cta"><a href="{{url('cart/'.$destination->id)}}" class="nav-link"><button class="btn btn-lg btn-primary">Book Now</button></a></li>
                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="../images/bali.jpeg" alt="Card image cap">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="../images/bali.jpeg" alt="Card image cap">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="../images/bali.jpeg" alt="Card image cap">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>
                    </div> --}}

                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate bg-light py-md-5">
                    <div class="sidebar-box pt-md-5">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon icon-search"></span>
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Categories</h3>
                            @foreach ($categories as $category)
                            <div class="col-6">
                                <a href="#">
                                    {{$category->name}}
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Other destinations</h3>
                        <div class="project-wrap">
                            
                        <a href="{{ url('destination-place', $rand_destination->id) }}" class="img" style="background-image:url('{{ asset('images/'.$rand_destination->image) }}');"></a>
                            <div class="text p-4">
                                <span class="price">{{$rand_destination->pricing}}</span>
                                <span class="days">8 Days Tour</span>
                                <h3><a href="{{url('destination-place/'.$rand_destination->id)}}">{{$rand_destination->title}}</a></h3>
                                <p class="location"><span class="ion-ios-map"></span>{{$rand_destination->title}}</p>
                                <ul>
                                    <li><span class="flaticon-shower"></span>2</li>
                                    <li><span class="flaticon-king-size"></span>3</li>
                                    <li><span class="flaticon-sun-umbrella"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Tag Cloud</h3>
                        <div class="tagcloud">
                            @foreach ($tags as $tag)
                            <div class="col-6">
                                <a href="#">
                                    {{$tag->name}}
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section> <!-- .section -->
    @endsection

