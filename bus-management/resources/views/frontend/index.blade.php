@extends('layouts.frontend')

@section('content')
	      <div class="hero-wrap js-fullheight" style="background-image: url('https://images.unsplash.com/photo-1570125909232-eb263c188f7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover <br>A new Place</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
          </div>
        </div>
      </div>
    </div>
	<section class="ftco-section justify-content-end ftco-search">
    	<div class="container-wrap ml-auto">
    		<div class="row no-gutters">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Bus</a>

              {{-- <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a> --}}

              {{-- <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Car Rent</a> --}}
            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            
            <div class="tab-content p-4 px-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">From</label>
	              				<div class="form-field">
	              					<div class="icon"><span class="icon-my_location"></span></div>
					                <input type="text" class="form-control" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Where</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control" placeholder="Where">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check In</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkin_date" placeholder="Check In">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check Out</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkout_date" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Travelers</label>
              					<div class="form-field">
	              					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">1</option>
			                        <option value="">2</option>
			                        <option value="">3</option>
			                        <option value="">4</option>
			                        <option value="">5</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check In</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkin_date" placeholder="Check In">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check Out</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkout_date" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Guest</label>
              					<div class="form-field">
	              					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">1</option>
			                        <option value="">2</option>
			                        <option value="">3</option>
			                        <option value="">4</option>
			                        <option value="">5</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>

              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-effect-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Where</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control" placeholder="Where">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check In</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkin_date" placeholder="Check In">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check Out</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkout_date" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
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
    	</div>
    </section>
	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>01</span> Travel</h3>
    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>02</span> Experience</h3>
    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>03</span> Relax</h3>
    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Most Popular Destination</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Paris, Italy</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$200</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination d-md-flex flex-column-reverse">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Paris, Italy</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$200</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Paris, Italy</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$200</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination d-md-flex flex-column-reverse">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Paris, Italy</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$200</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
@endsection