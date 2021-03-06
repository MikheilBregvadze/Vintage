@extends('layouts.app')
	@section('content')

		<div class="container">
			<div class="background">
				<div class="bgimg">
					<img src="img/scrambler-bg.png" alt="background">
				</div>
				<div class="row">
					<div class="col-12">
						<img class="cruz-outlowImg" src="img/scrambike.png" alt="velo1">
					</div>
				</div>
			</div>
		</div>

		<section>
			<div class="container">
				<div class="title">
					<h1>Built to Stand the Test of Time</h1>
					<p>A collaboration with Emory Motorsports</p>
				</div>
				
			</div>
			<div class="scram-video">
				<div class="scram-opacity">
					<div class="player scram-player"><span></span></div>
					<div class="padding"></div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="d-flex center justify-content-between rame">

						<div class="video-box">
							<div class="video-box_img">
								<img class="center" src="img/icon1.png">
							</div>
							<div class="video-box_txt">
								<p class="txt-bold text-center">Race</p>
								<p class="text-center">Mode</p>
							</div>
						</div>

						<div class="video-box">
							<div class="video-box_img">
								<img class="center" src="img/icon2.png">
							</div>
							<div class="video-box_txt">
								<p class="txt-bold text-center">Suspensino</p>
								<p class="text-center">Range</p>
							</div>
						</div>

						<div class="video-box">
							<div class="video-box_img">
								<img class="center" src="img/icon3.png">
							</div>
							<div class="video-box_txt">
								<p class="txt-bold text-center">Shimano</p>
								<p class="text-center">Range</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="gallery">
				<div class="gallery-title">
					<h1 class="cruz-gallery-title">best-in-class performance</h1>
					<p class="cruz-gallery-para">Classic California cruiser with design elements reminiscent ofthe American Art Deco movement</p>
				</div>
				
			</div>
		</div>
		<div class="gallery-slider scram-slider">
			<div class="gallery-slider_bacground"></div>
			<div class="gallery-box">
				<div class="gallery-box_title">
					<h3>Innovative</h3>
					<p class="fzbig">design</p>
					<p class="fzsmall">Classic california Cruiser</p>
					<div class="sliderButton">
						<div class="previus-pic"><span class="prev-arrow"></span></div>
						<div class="next-pic"><span class="next-arrow"></span></div>
					</div>
				</div>
			</div>
		</div>
		</section>

		<section>
			<div class="row description">
				<div class="col-8">
					<div class="description-img">
						<img src="img/scrambyzoom.png">
					</div>
				</div>
				<div class="col-4 desc-right">
					<div class="bikes-zoomed scrambler">
						<div class="bikes-zoomed_img">
							<img src="img/scrambler4.png">
						</div>
					</div>

					<div class="bikes-description_text">
						<h1>The Battery</h1>
						<p>The heart and soul of the CRUZ, our patent pending aluminum battery box is beautifully designed and locally sand cast in Santa Clara, CA. This special housing protects crucial electrical components, including the 702 </p>
						<div class="row">
							<div class="desc-mile d-flex">
								<div class="m-auto"><img src="img/road.png"></div>
								<p class="center">35 mile</p>
							</div>
							<div class="desc-mile d-flex">
								<div class="m-auto"><img src="img/settings.png"></div>
								<p class="center">High Performance</p>
							</div>
						</div>
					</div>
					<div class="more-details row">
						<div class="d-flex">
							<div class="plus-details scrambler">+</div>
							<p class="center">More details</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			
			<div class="journal journall-scram">
				<div class="container">
					<div class="row justify-content-between">
						<h1>The Batary</h1>
						<div class="close-tab d-flex">
							<span class="d-sm-inline-block center">Close</span>
							<span class="close-tab_x d-sm-inline-block" style="color: #000;">X</span>
						</div>
					</div>
					<div class="d-flex justify-content-between">
						<p class="col-lg-6">The heart and soul of the CRUZ, our patent pending aluminum battery box is beautifully designed and locally sand cast in Santa Clara, CA. This special housing protects crucial electrical components, including the 702 watt hour lithium battery. It also disperses heat, allowing our high performance system to run at lower temperatures.</p>
						<p class="col-lg-5">Smoothly decelerate while re-charging the battery with the tap of the regenerative braking button. This maximizes the range, guaranteeing you’ll go 35 miles on a charge, even when riding requires heavy braking.</p>
					</div>
				</div>
			</div>

		</section>

		<section>
			<div class="container">
			<div class="title">
				<h1>Buy Scrambler</h1>
				<span>In search of Adventure</span>
				{{-- <a class="learnMore" href="javascript:void(0)">Learn More</a> --}}
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
			</div>
		</div>
	</section>

	<section>
			<p class="text-center text-center-last">Specification</p>
			<div class="row">
				<div class="col-lg-6">
					<div class="cruz-last_section">
						<img src="img/scrambler7.png">
					</div>
				</div>
				<div class="last-section_texts journall-scram col-lg-6 d-flex">
					<div class="build-yours m-auto">
						<h1>Welcome to the ride of your life.</h1>
						<div class="plus d-flex align-items-center">
							<span class="plus-details_cruz d-sm-inline-block scrambler" style="color: #fff;">+</span>
							<p>Build Yours now</p>
						</div>
					</div>
				</div>
				
			</div>
		</section>

	@endsection