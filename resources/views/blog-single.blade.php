@extends('layouts.package')
    @section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('../images/image_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Recent Post</h1>
                    {{-- <p class="breadcrumbs"><span class="mr-2"><a href="">Home <i class=""></i></a></span> </p> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-md-last ftco-animate py-md-5 mt-md-5">
                    <h2 class="mb-3">{{$post->title}}</h2>
                    <p><img src="images/bali.jpeg" alt="" class="img-fluid"></p>
                    <p>{{$post->details}}</p>
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
                        <h3>Other Post</h3>
                        <div class="project-wrap">
                            <a href="{{url('blog-single/'.$rand_post->id)}}" class="img" style="background-image: url(../images/destnation-1.jpg);"></a>
                            <div class="text p-4">
                                <h3><a href="{{url('blog-single/'.$rand_post->id)}}">{{$rand_post->title}}</a></h3>
                                <p class="location"><span class="ion-ios-map"></span>{{$rand_post->detail}}</p>
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

