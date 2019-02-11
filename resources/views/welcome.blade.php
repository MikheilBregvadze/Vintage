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
	<section id="testino">
	
			<div class="container">
					<div class="title">
						<h1>Our Bikes</h1>
						<span>New Offering 0% Financing</span>
						<a class="learnMore" href="javascript:void(0)">Learn More</a>
					</div>
				</div>
		<div class="container">
			<div class="bikes">
				@if(count($product) > 0)
				<div class="row">
					@foreach($product as $item)
						@include('inc.gallery.gallery-bike')
					@endforeach
				</div>
				@else
				<div class="text-center pb-5 pt-5">
					Nothing Product Yet
				</div>
				@endif
			</div>
		</div>

	</section>
	<!-- third section --> <!-- third section -->
	<section>
		
		@include('inc.video.welcome-video')

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
