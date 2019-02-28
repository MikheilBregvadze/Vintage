<new-wallet-component v-cloak inline-template>
    <transition name="scale">
    <div class="popUp"  :class="{'show': isVisible}" v-if='isVisible' v-on:click.self="closeModal()">
 		<div class="new-wallet">
 			<div>
 				<div>
                     <div class="d-flex justify-content-between">
                       <h2 class="text-left p-0 pb-3">New Wallet</h2>
                        <div class="close mt-2" @click="closeModal">@include('icons.close')</div>
                     </div>
					 @php
                        $crypto1 = json_encode([
                                        0 => 'bitcoin',
                                        1 => 'Etherium',
										2 => 'Dech',
										3 => 'Lithecoin',
										4 => 'BTC gold',
										5 => 'zCash'
                                    ]);
						@endphp
 					<form v-on:submit.prevent="onSubmit">
 						<div class="form-group">
						<label for="">Select crypto</label>
						 <select-component 
                                :options="{{$crypto1}}" 
                                :name="'crypto1'"
                                :placeholder="'Filter by crypto...'">
                        </select-component>  
 						</div>

 						<button type="submit" class="btn btn-bg mb-2" @click="onSubmit">Create</button>
 						{{-- <a href="" v-on:click.prevent="closeModal" class="popup-link d-block text-center">Cancel</a> --}}
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
    </transition>
 </new-wallet-component>

