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
						{{-- <img class="outlowImg" src="img/velo.png" alt="velo1"> --}}
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
        @include('slider.gallery')
</section>

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
                    {{-- @include('inc.gallery.gallery-bike') --}}
                    <bike-component
                    v-cloak 
                    inline-template>
                            <div class="bike-box col-sm-12 col-md-4 col-xl-3">
                                <div class="hover-ball" v-on:click="showconfirmation({{$item->id}})">+</div>
                                <div class="bike-box_img">
                                    <img src="http://127.0.0.1:8001/img/product/{{ $item->id .'/'. $item->file }}" alt="">
                                </div>
                                <div class="bike-box_desc">
                                    <h4>{{ $item->title }}</h4>
                                    <p>{{ $item->description }}</p>
                                </div>
                                <div class="hidden d-flex justify-content-around align-content-center">
                                    <div class="hidden-txt align-self-center">Buy Now</div>
                                    <div class="arrow">></div>
                                </div>
                            </div>

                    </bike-component>
                @endforeach
                @include('modal.bike-modal')
            </div>
            @else
            <div class="text-center pb-5 pt-5">
                Nothing Product Yet
            </div>
            @endif
        </div>
    </div>

</section>

<section>
		
    @include('video.home-video')

</section>

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
