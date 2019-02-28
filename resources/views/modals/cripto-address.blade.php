<cripto-address-component v-cloak inline-template>
    <transition name="scale">
    <div class="popUp"  :class="{'show': isVisible}" v-if='isVisible' v-on:click.self="closeModal()">
 		<div class="cripto-address">
 			<div>
 				<div>
                     <div class="d-flex justify-content-between">
                       <h2 class="text-left p-0 pb-3"></h2>
                        <div class="close mt-2" @click="closeModal">@include('icons.close')</div>
                     </div>
                     <div>
	                     <div class="text-center">
	                     	<h3>
	                     		Your bitcoin address
	                     		<address class="mt-1">Xdmo05450080co5</address>
	                     	</h3>
                     	</div>
                     	<div class="d-flex my-4">
                     		<img src="/images/QR.png" class="m-auto" />
                     	</div>
                     	<div class="d-flex links">
                     		<div class="col-3 p-0">
                     			<a href="#">@include('icons.copy')</a>
                     		</div>
                     		<div class="col-3 p-0">
                     			<a href="#">@include('icons.print')</a>
                     		</div>
                     		<div class="col-3 p-0">
                     			<a href="#">@include('icons.email')</a>
                     		</div>
                     		<div class="col-3 p-0">
                     			<a href="#">@include('icons.link')</a>
                     		</div>
                     	</div>
                     </div>
 				</div>
 			</div>
 		</div>
 	</div>
    </transition>
 </cripto-address-component>