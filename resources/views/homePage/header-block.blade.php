<section 
	class="header-block overflow-hid" 
	:style="'background-position: center top ' +(0 - (top*.5))+'px; background-size: cover'"
	>
		<div class="container">
			<div class="position-relative" :style="`top: ${top*1.25}px`">
				<div class="">
					<div class="header-block__item col-md-6 col-12 position-relative">
						<h1>The next winner of crypto trading</h1>
						<p class="ff-thin fs-20 my-3 px-3">Cointative is an online investment management platform specialized in quantitative trading of crypto-assets</p>
						@if(!auth::user())
						<div class="position-relative">
							<register-button :btn="'register-button'" :text="'Get started!'"></register-button>
						</div>
						@else
						<div class="pt-5"></div>
						@endif
					</div>
				</div>
				<div class="header-block__bot row justify-content-between text-center">
					<div class="flex-1 d-flex color-light"><img src="/images/partners/bitfinex-seeklogo.com.svg" alt="" class="w-50 m-auto" /></div>
					<div class="flex-1 d-flex color-light"><img src="/images/partners/bitfinex-seeklogo.com.svg" alt="" class="w-50" /></div>
					<div class="flex-1 d-flex color-light"><img src="/images/partners/blockchain-seeklogo.com.svg" alt="" class="w-50" /></div>
					<div class="flex-1 d-flex color-light"><img src="/images/partners/blockchain-seeklogo2.com.svg" alt="" class="w-50" /></div>
					<div class="flex-1 d-flex color-light"><img src="/images/partners/blockchain-seeklogo2.com.svg" alt="" class="w-50" /></div>
				</div>
			</div>
		</div>
		{{-- <div class="header-block__bot">
			<div class="container">
				
			</div>
		</div> --}}
</section>