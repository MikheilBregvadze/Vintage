<send-money-component v-cloak inline-template>
    <transition name="scale">
    <div class="popUp"  :class="{'show': isVisible}" v-if='isVisible' v-on:click.self="closeModal">
 		<div class="send-money">
 			<div>
 				<div>
                    <div class="d-flex justify-content-between">
					   <h2 class="text-left p-0 pb-3">Send money</h2>
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
                        <div class="row">
                            <div class="col-md-6">
         						<div class="form-group">
            						<label for="">Select crypto</label>
            						 <select-component 
                                            :options="{{$crypto1}}" 
                                            :name="'crypto1'"
                                            :placeholder="'Filter by crypto...'">
                                    </select-component>  
         						</div>
                            </div>
                           <div class="col-md-6">
                                <div class="form-group">
                                    <div class="position-relative">
                                        <input type="" name="" class="form-control mt-4" placeholder="Enter money">
                                        <span class="form-group-append">USD</span>
                                    </div>
                                    <span class="form-help">Available balance 5 250.50 USD</span>
                                </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                                <div class="form-group">
                                   {{--  <label for="">Select crypto</label> --}}
                                    <input type="" name="" class="form-control" placeholder="Address here">
                                </div>
                           </div>
                       </div>
                         <div class="row">
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="">2 factor authentication code</label>
                                    <input type="" name="" class="form-control" placeholder="Enter SMC code">
                                </div>
                            </div>
                            <div class="col-md-6">
     						     <button type="submit" class="btn btn-bg">Send</button>
                            </div>
                        </div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
    </transition>
 </send-money-component>