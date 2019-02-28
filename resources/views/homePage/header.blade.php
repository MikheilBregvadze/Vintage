<header :class="{'sm':resizeHeader, 'background' : headerBg}" :style="'background: rgba(31, 14, 54, '+(top*0.005)">
	<div class="container">
		<div class="d-flex justify-content-between">
			<div class="">
				<a href="/" class="logo">Cointative</a>
			</div>
			<div class="">
				<div class="row">
					<div class="col-md-12">
						<div class="d-flex justify-content-end"> 
						  <div class="menu-toggle" ref="menuToggle" v-on:click="menuToggle">  
						    <span></span>
						    <span></span>
						    <span></span>
						  </div>   
						</div>
						<div class="header-menu responsive-menu row" ref="menu" >
							<nav class="navBar">
								<ul class="d-flex justify-content-end m-0">
									<li><a href="">Home</a></li>
									<li><a href="">Pricing plan</a></li>
									<li><a href="">Affiliate program</a></li>
									<li><a href="">About us</a></li>
									<li><a href="/faq">FAQ</a></li>
								</ul>
							</nav>
							<div>
								@if(!auth::user())
									<login-button :text="'Login'"></login-button>
								@else
									<a class="login-button" href="{{route('dashboard')}}">My profile</a>
								@endif 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>