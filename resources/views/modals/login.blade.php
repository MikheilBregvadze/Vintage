 <login-component v-cloak inline-template>
 	<transition name="scale">
 		<div class="popUp" :class="{'show': isVisible}" v-if='isVisible' v-on:click.self="closeModal()">
 			<div class="login">
 				<div>
 					<div>
 						<h2 class="text-left p-0 pb-3">Log in</h2>
 						<form v-on:submit.prevent="onSubmit">
 							<div class="form-group">
 								<input id="email" 
 								type="email" 
 								class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
 								name="email" 
 								value="{{ old('email') }}" 
 								placeholder="Email" 
 								v-model="form.email"
 								required autofocus>

 								<span class="text-danger">@{{ errors.email ? errors.email.join('') : '' }}</span>
 							</div>

 							<div class="form-group">
 								<input id="password" 
 								type="password" 
 								class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
 								name="password"  
 								placeholder="Password" 
 								v-model="form.password"
 								required>
 								<span class="text-danger">@{{ errors.password ? errors.password[0] : '' }}</span>
 							</div>

 							<a class="popup-link d-block text-right" href="" v-on:click.prevent="openForgotPasswordModal()">
 								Forgot?
 							</a>

 							<div class="checkbox m-b-10 m-t-15">
 								<div class="custom-control custom-checkbox checkbox-primary form-check">
 									<input type="checkbox" class="custom-control-input" id="stateCheck1" checked="">
 									<label class="terms-link mt-1 custom-control-label" for="stateCheck1">&nbsp;Remember me</label>
 								</div>
 							</div>
 							<button type="submit">Login</button>
 							<a href="" v-on:click.prevent="onClick" class="popup-link d-block text-center">Or Register</a>
 						</form>
 					</div>
 				</div>
 			</div>
 		</div>
 	</transition>
 </login-component>

