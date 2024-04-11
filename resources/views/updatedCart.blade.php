@extends('layouts.package')
    @section('content')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
	<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('styles/cart.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('styles/cart_responsive.css')}}">

	<div class="super_container">

		<!-- Header -->

		{{-- <header class="header">
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo"><a href="#">OTOURO</a></div>
								<div class="header_extra ml-auto">
									<div class="shopping_cart">
										<a href="{{url('cart/'.$data->id)}}">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;"
												xml:space="preserve">
												<g>
													<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z" />
												</g>
											</svg>
											<div>Cart <span>(0)</span></div>
										</a>
									</div>

									<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Search Panel -->
			<div class="search_panel trans_300">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
								<form action="#">
									<input type="text" class="search_input" placeholder="Search" required="required">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Social -->
			<div class="header_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</header> --}}

		<!-- Menu -->

		<div class="menu menu_mm trans_300">
			<div class="menu_container menu_mm">
				<div class="page_menu_content">

					<div class="page_menu_search menu_mm">
						<form action="#">
							<input type="search" required="required" class="page_menu_search_input menu_mm"
								placeholder="Search for products...">
						</form>
					</div>
					<ul class="page_menu_nav menu_mm">
						<li class="page_menu_item has-children menu_mm">
							<a href="index.html">Home<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection menu_mm">
								<li class="page_menu_item menu_mm"><a href="categories.html">Categories<i
											class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="product.html">Product<i
											class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="cart.html">Cart<i
											class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i
											class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i
											class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item has-children menu_mm">
							<a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection menu_mm">
								<li class="page_menu_item menu_mm"><a href="categories.html">Category<i
											class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="categories.html">Category<i
											class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="categories.html">Category<i
											class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="categories.html">Category<i
											class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item menu_mm"><a href="index.html">Accessories<i
									class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i
									class="fa fa-angle-down"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->



		<!-- Cart Info -->

		<div class="cart_info">
			<div class="container">
				<div class="row">
					<div class="col">
						<!-- Column Titles -->
						<div class="cart_info_columns clearfix">
							<div class="cart_info_col cart_info_col_product">Product</div>
							<div class="cart_info_col cart_info_col_price">Price</div>
							<div class="cart_info_col cart_info_col_quantity">Quantity</div>
							<div class="cart_info_col cart_info_col_total">Total</div>
						</div>
					</div>
				</div>
                <form action="{{url('updated-cart')}}" method="post" enctype="multipart/form-data">
                    @csrf
				<div class="row cart_items_row">
					<div class="col">
						<!-- Cart Item -->
						<div
							class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
							<!-- Name -->
							<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
								<div class="cart_item_image">
									<div><img src="../images/destination-1.jpg" height="180" width="900" alt=""></div>
								</div>
								<div class="cart_item_name_container">
									<div class="cart_item_name"><a href="#">{{$data->title}}</a></div>
                                    <input type="hidden" name="destination_id" value="{{$data->id}}">
								</div>
							</div>
							<!-- Price -->
							<div class="cart_item_price">{{$data->pricing}}</div>
							<!-- Quantity -->
							<div class="cart_item_quantity">
								<div class="product_quantity_container">
									<div class="product_quantity clearfix">
										<span>No</span>
										<input id="quantity_input" name="quantity_input" type="text" pattern="[0-9]*" value="{{$quantity}}">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i
													class="fa fa-chevron-up" aria-hidden="true"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i
													class="fa fa-chevron-down" aria-hidden="true"></i></div>
										</div>
									</div>
								</div>
							</div>
							<!-- Total -->
							<div class="cart_item_total">{{$cartValue}}</div>
						</div>

					</div>
				</div>
				<div class="row row_cart_buttons">
					<div class="col">
						<div
							class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
							<div class="button continue_shopping_button"><a href="{{route('packages')}}">More
									destinations</a></div>
							<div class="cart_buttons_right ml-lg-auto">
                                <button class="btn btn-lg btn-success">Update cart</button>
								{{-- <div class="button update_cart_button"><button class="btn btn-lg" type="submit">Update cart</button></div> --}}
							</div>
						</div>
					</div>
				</div>
                </form>
				<div class="row row_extra">
					<div class="col-lg-4">
						<!-- Coupon Code -->
						<div class="coupon">
							<div class="section_title">Coupon code</div>
							<div class="section_subtitle">Enter your coupon code</div>
							<div class="coupon_form_container">
								<form action="#" id="coupon_form" class="coupon_form">
									<input type="text" class="coupon_input" required="required">
									<button class="button coupon_button"><span>Apply</span></button>
								</form>
							</div>
						</div>
					</div>
                    @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
					<div class="col-lg-6 offset-lg-2">
						<div class="cart_total">
							<div class="section_title">Cart total</div>
							<div class="section_subtitle">Final info</div>
							<div class="cart_total_container">
								<ul>
									{{-- <li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_total_title">Subtotal</div>
										<div class="cart_total_value ml-auto">{{$data->pricing}}</div>
									</li> --}}

									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_total_title">Total</div>
										<div class="cart_total_value ml-auto">{{$cartValue}}</div>
									</li>
								</ul>
							</div>
							{{-- <div class="button checkout_button"><a href="{{url('checkout')}}">Proceed to checkout</a> --}}
							<div class="button checkout_button"><a href="{{url('checkout',$data->id.'/'.$cartValue)}}">Proceed to checkout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

	</div>
    @endsection

	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
	<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
	<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
	<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
	<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
	<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
	<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
	<script src="{{asset('plugins/easing/easing.js')}}"></script>
	<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
	<script src="{{asset('js/cart.js')}}"></script>

