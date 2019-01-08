@extends('layouts.app')
@section('content')
	<section>
		<div class="container">
			<div class="background">
				<div class="bgimg">
					<img src="img/outlaw.png" alt="background">
				</div>
				<div class="row">
					<div class="col-12">
						<img class="outlowImg" src="img/velo.png" alt="velo1">
					</div>
				</div>
			</div>
			
			<div class="gallery">
				<div class="gallery-title">
					<h1>Emory Outlaw Tracker</h1>
					<p>A collaboration with Emory Motorsports</p>
					<div class="gallery-section">
						<router-link tag="span" to="/" exact>
								<a class="sectionOne">Explore</a>
						</router-link>
						<router-link tag="span" to="/build-yours" exact>
							<a class="sectionTwo">build Yours</a>
						</router-link>
						
					</div>
				</div>
				
			</div>
		</div>

		@include('inc.gallery.gallery-slider')
	</section>
		<!--  second section --> <!--  second section -->
	<section>
		<div class="container">
			<div class="title">
				<h1>Our Bikes</h1>
				<span>New Offering 0% Financing</span>
				<a class="learnMore" href="javascript:void(0)">Learn More</a>
			</div>
		</div>
		<div class="container">
			<div class="bikes row">

				<div class="bike-box col-sm-12 col-md-4 col-xl-3">
					<div class="hover-ball">+</div>
					<div class="bike-box_img">
						<img src="img/velo1.png" alt="">
					</div>
					<div class="bike-box_desc">
						<h4>Racing Green</h4>
						<p>Built to Stand the Test </p>
					</div>
					<div class="hidden d-flex justify-content-around align-content-center">
						<div class="hidden-txt align-self-center">Buy Now</div>
						<div class="arrow">></div>
					</div>
				</div>

				<div class="bike-box col-sm-12 col-md-4 col-xl-3">
					<div class="hover-ball">+</div>
					<div class="bike-box_img">
						<img src="img/velo2.png" alt="">
					</div>
					<div class="bike-box_desc">
						<h4>Racing Green</h4>
						<p>Built to Stand the Test </p>
					</div>
					<div class="hidden d-flex justify-content-around align-content-center">
						<div class="hidden-txt align-self-center">Buy Now</div>
						<div class="arrow">></div>
					</div>
				</div>

				<div class="bike-box col-sm-12 col-md-4 col-xl-3">
					<div class="hover-ball">+</div>
					<div class="bike-box_img">
						<img src="img/velo3.png" alt="">
					</div>
					<div class="bike-box_desc">
						<h4>Racing Green</h4>
						<p>Built to Stand the Test </p>
					</div>
					<div class="hidden d-flex justify-content-around align-content-center">
						<div class="hidden-txt align-self-center">Buy Now</div>
						<div class="arrow">></div>
					</div>
				</div>

				<div class="bike-box col-sm-12 col-md-4 col-xl-3">
					<div class="hover-ball">+</div>
					<div class="bike-box_img">
						<img src="img/velo4.png" alt="">
					</div>
					<div class="bike-box_desc">
						<h4>Racing Green</h4>
						<p>Built to Stand the Test </p>
					</div>
					<div class="hidden d-flex justify-content-around align-content-center">
						<div class="hidden-txt align-self-center">Buy Now</div>
						<div class="arrow">></div>
					</div>
				</div>

				<div class="bike-box col-sm-12 col-md-4 col-xl-3">
					<div class="hover-ball">+</div>
					<div class="bike-box_img">
						<img src="img/velo4.png" alt="">
					</div>
					<div class="bike-box_desc">
						<h4>Racing Green</h4>
						<p>Built to Stand the Test of </p>
					</div>
					<div class="hidden d-flex justify-content-around align-content-center">
						<div class="hidden-txt align-self-center">Buy Now</div>
						<div class="arrow">></div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- third section --> <!-- third section -->
	<section>
		<div class="video">
			<div class="opacity">
				<h1>Handcrafted in California</h1>
				<p>The Vintage Electric vision goes beyond just building bikes. Founded upon old school American manufacturing values and paired with the most cutting edge technology on the market</p>
				<div class="player"><span></span></div>
				<div class="padding"></div>
			</div>
		</div>
	</section>
		<!-- fourth section --> <!-- fourth section -->  
	<section>
		<div class="container">
			<div class="rate-section">

				<div class="left-section">
					<div class="smaller"><img src="" alt=""></div>
					<div class="big"><img src="" alt=""></div>
					<div class="small"><img src="" alt=""></div>
					<div class="middle"><img src="" alt=""></div>
				</div>

				<div class="rate">
					<div class="rate-img center">
						<img src="" alt="" class="rate-img">
					</div>
					<h1>Nina Geometrova</h1>
					<p>The Vintage Electric vision goes beyond just building bikes. Founded upon old school American manufacturing values and paired with the most cutting edge technology on the market</p>
					<div class="rate-desc">
						<span class="rate-num">5.0</span>
						<img src="" alt="">
						<img src="" alt="">
					</div>
				</div>

				<div class="right-section">
					<div class="small"><img src="" alt=""></div>
					<div class="middle"><img src="" alt=""></div>
					<div class="smaller"><img src="" alt=""></div>
					<div class="big"><img src="" alt=""></div>
				</div>

			</div>
		</div>
	</section>
	@endsection
	{{-- @include('inc.footer') --}}
