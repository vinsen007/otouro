@extends('layouts.package')
    @section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('../images/destination-12.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Check Out</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Check Out <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
	<div class="super_container">
		<div class="checkout">
			<div class="container">
                <section class="ftco-section contact-section">
                    <div class="container">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                          {{Session::get('success')}}
                        </div>
                        @endif
                      <div class="row block-9">
                        <div class="col-md-6 d-flex">
                          <!-- Success message -->
                          <form id="checkout_form" method="POST" class="checkout_form"
                          action="{{url('checkout-store')}}">
                          @csrf
                          <div class="row">
                              <div class="col-xl-6">
                                  <!-- Name -->
                                  <label for="checkout_name">First Name*</label>
                                  <input type="text" id="checkout_name"
                                      class="form-control {{ $errors->has('firstname') ? 'error' : '' }}"
                                      name="firstname" id="firstname" required="required">
                                  @if ($errors->has('firstname'))
                                  <div class="error">
                                      {{ $errors->first('firstname') }}
                                  </div>
                                  @endif
                              </div>
                              <div class="col-xl-6 last_name_col">
                                  <!-- Last Name -->
                                  <label for="checkout_last_name">Last Name*</label>
                                  <input type="text" id="checkout_last_name"
                                      class="form-control {{ $errors->has('lastname') ? 'error' : '' }}"
                                      name="lastname" id="lastname" required="required">
                                  @if ($errors->has('lastname'))
                                  <div class="error">
                                      {{ $errors->first('lastname') }}
                                  </div>
                                  @endif
                              </div>
                          </div>

                          <div>
                              <!-- Phone no -->
                              <label for="checkout_phone">Phone no*</label>
                              <input type="phone" id="checkout_phone"
                                  class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone"
                                  id="phone" required="required">
                              @if ($errors->has('phone'))
                              <div class="error">
                                  {{ $errors->first('phone') }}
                              </div>
                              @endif
                          </div>
                          <div>
                              <!-- Email -->
                              <label for="checkout_email">Email Address*</label>
                              <input type="phone" id="checkout_email"
                                  class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email"
                                  id="email" required="required">
                              @if ($errors->has('email'))
                              <div class="error">
                                  {{ $errors->first('email') }}
                              </div>
                              @endif
                          </div>

                        </div>

                        <div class="col-md-6 d-flex">
                          <table>
                            <thead>
                                <th>Tour</th>
                                <th style="padding-left: 300px;">Total</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$des->title}}</td>
                                    <td style="padding-left: 300px;">{{$cartValue}}</td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                          <p style="padding-left: 600px;" class="order_text">Can't wait to start your vacation?</p><br>
                            <input type="hidden" name="destination" value="{{$des->id}}">
                            <input type="hidden" name="cartValue" value="{{$cartValue}}">
                              <button style="margin-left: 600px;" class="btn-success btn-lg" type="submit">Proceed to pay</button>
                          </form>
						{{-- <div class="button order_button"><a href="{{route('stripe')}}">Proceed to pay</a></div> --}}
                      </div>
                    </div>
                  </section>
				{{-- <div class="row">

					<!-- Billing Info -->
					<div class="col-lg-6">
						<div class="billing checkout_section">
							<div class="section_title">Personal Info</div>
							<div class="section_subtitle">Fill in your information</div>
							<div class="checkout_form_container">
								<form action="#" id="checkout_form" method="POST" class="checkout_form"
									action="{{route('checkout.store')}}">
									@csrf
									<div class="row">
										<div class="col-xl-6">
											<!-- Name -->
											<label for="checkout_name">First Name*</label>
											<input type="text" id="checkout_name"
												class="form-control {{ $errors->has('firstname') ? 'error' : '' }}"
												name="firstname" id="firstname" required="required">
											@if ($errors->has('firstname'))
											<div class="error">
												{{ $errors->first('firstname') }}
											</div>
											@endif
										</div>
										<div class="col-xl-6 last_name_col">
											<!-- Last Name -->
											<label for="checkout_last_name">Last Name*</label>
											<input type="text" id="checkout_last_name"
												class="form-control {{ $errors->has('lastname') ? 'error' : '' }}"
												name="lastname" id="lastname" required="required">
											@if ($errors->has('lastname'))
											<div class="error">
												{{ $errors->first('lastname') }}
											</div>
											@endif
										</div>
									</div>

									<div>
										<!-- Phone no -->
										<label for="checkout_phone">Phone no*</label>
										<input type="phone" id="checkout_phone"
											class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone"
											id="phone" required="required">
										@if ($errors->has('phone'))
										<div class="error">
											{{ $errors->first('phone') }}
										</div>
										@endif
									</div>
									<div>
										<!-- Email -->
										<label for="checkout_email">Email Address*</label>
										<input type="phone" id="checkout_email"
											class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email"
											id="email" required="required">
										@if ($errors->has('email'))
										<div class="error">
											{{ $errors->first('email') }}
										</div>
										@endif
									</div>


								</form>
							</div>
						</div>
					</div>

					<!-- Order Info -->

					<div class="col-lg-6">
						<div class="order checkout_section">
							<div class="section_title">Your package</div>
							<div class="section_subtitle">Tour details</div>

							<!-- Order details -->
							<div class="order_list_container">
								<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Tour</div>
									<div class="order_list_value ml-auto">Total</div>
								</div>
								<ul class="order_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">{{$des->title}}</div>
										<div class="order_list_value ml-auto">{{$des->pricing}}</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Subtotal</div>
										<div class="order_list_value ml-auto">{{$des->pricing}}</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Total</div>
										<div class="order_list_value ml-auto">{{$des->pricing}}</div>
									</li>
								</ul>
							</div>

							<!-- Payment Options -->
							{{-- <div class="payment">
								<div class="payment_options">
									<label class="payment_option clearfix">Paypal
										<input type="radio" name="radio">
										<span class="checkmark"></span>
									</label>
									<label class="payment_option clearfix">Cash on delivery
										<input type="radio" name="radio">
										<span class="checkmark"></span>
									</label>
									<label class="payment_option clearfix">Credit card
										<input type="radio" name="radio">
										<span class="checkmark"></span>
									</label>
									<label class="payment_option clearfix">Direct bank transfer
										<input type="radio" checked="checked" name="radio">
										<span class="checkmark"></span>
									</label>
								</div>
							</div> --}}

							<!-- Order Text -->
							{{-- <div class="order_text">Can't wait to start your vacation?</div>

							<div class="button order_button"><a href="{{route('stripe')}}">Proceed to pay</a></div>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
@endsection
