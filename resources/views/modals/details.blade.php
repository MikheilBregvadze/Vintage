<transition name="scale">
<div class="popUp " :class="{'show': showModal}" v-if='showModal' v-on:click.self="closeModal()">
		<div class="details">
			<div>
				<div>
                 <div class="d-flex justify-content-between">
                   <h2 class="text-left p-0 pb-3">Details</h2>
                    <div class="close mt-2" @click="closeModal">@include('icons.close')</div>
                 </div>
				<div class="details-table mb-4">
					<div class="row ml-0">
						<div class="col-md-3 pl-0">Trans ID:</div>
						<div class="col-md-9">@{{details.id}}</div>
					</div>
					<div class="row ml-0">
						<div class="col-md-3 pl-0">Address:</div>
						<div class="col-md-9">@{{details.address}}</div>
					</div>
					<div class="row ml-0">
						<div class="col-md-3 pl-0">Fee:</div>
						<div class="col-md-9">@{{details.fee}}</div>
					</div>
				</div>
				<div class="mb-3">
					<h4>Blckchain infomation</h4>
					<div class="row">
						<div class="col-md-7">
							<a href="#">@include('icons.small-link')</a>
							@{{details.details}}
						</div>
						<div class="col-md-5 text-right confirmations">
							<span class="bold">Confirmations</span>
							<span>0</span>/<span class="bold">5</span></div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</transition>