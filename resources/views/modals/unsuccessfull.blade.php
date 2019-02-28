<unsuccessfull-component v-cloak inline-template>
    <transition name="scale">
    <div class="popUp"  :class="{'show': isVisible}" v-if='isVisible' v-on:click.self="closeModal()">
 		<div class="alert-status">
 			<div>
 				<div class="d-flex justify-content-end">
 				   <div class="close mt-2" @click="closeModal">@include('icons.close')</div>
 				</div>
 				<div class="text-center mt-3">
	                @include('icons.unsuccessfull')
	                <div>
	                	<h3 class="text-center p-0 pb-3">Transaction unsuccessful!
	                			<span>There was a problem with the payment service</span>
	                	</h3>
	                	<button class="mt-0 mb-4 btn-bg"  v-on:click="redirect('send-money:open')">Try again</button>
	                </div>
 				</div>
 			</div>
 		</div>
 	</div>
    </transition>
 </unsuccessfull-component>