<register-component 
v-cloak 
inline-template>
<transition name="scale">
	<div class="popUp" :class="{'show': isVisible}" v-if="isVisible" v-on:click.self="closeModal()">
		<div class="register">
			<div class="close" @click="closeModal"></div>
			{{-- <h2 class="text-left pt-0 pb-4">Registration</h2> --}}
            <div class="d-flex justify-content-between">
			   <h2 class="text-left p-0 pb-3">Registration</h2>
               <div class="close mt-2" @click="closeModal">@include('icons.close')</div>
            </div>
			<form autocomplete="off" v-on:submit.prevent="onSubmit">

						<div class="form-group">
							<label class="sr-only">{{ __('user.email') }}</label>
							<input 
							onkeyup="this.setAttribute('value', this.value);"  
							value="" 
							v-on:focus="clearError('email')" 
							v-model="form.email" 
							type="email"
							class="form-control" 
							placeholder="Email" >
							<span class="text-danger">@{{ errors.email ? errors.email.join('') : '' }}</span> 
						</div> 

						<div class="form-group position-relative">
							<label class="sr-only">{{ __('user.password') }}</label> 
							<input 
							onkeyup="this.setAttribute('value', this.value);" 
							value="" 
							type="password"
							v-on:focus="clearError('password')" 
							v-model="form.password"
							class="form-control"
							placeholder="Password"
							>
							<div class="hint mb-3">
								<div class="hint-content">
									<strong>Must contain:</strong> 
									<div>Lower letters (a-z)</div> 
									<div>One number (0-9)</div> 
									<div>Minimum length 6</div>
								</div> 
								<div class="hint-icon">
								</div>
							</div>
							<span class="text-danger">@{{ errors.password ? errors.password[0] : '' }}</span>          
						</div>

						<div class="form-group">
							<label class="sr-only">{{ __('user.Confirm_password') }}</label> 
							<input id="password-confirm" 
							type="password" 
							class="form-control" 
							v-on:focus="clearError('password')"
							v-model="form.password_confirmation"
							placeholder="Confirm password">
							<span class="text-danger">@{{ errors.password ? errors.password[0] : '' }}</span>
						</div>
					
						<div class="custom-control custom-checkbox mt-4 pt-3">
							<input type="checkbox" class="custom-control-input" v-model="form.agreement" value="1" id="defaultUnchecked">
							<label class="custom-control-label" for="defaultUnchecked">
								{{-- <span>{!!__('notifications.agree_terms', ["href" => route('terms'), "class" => "terms-link d-inline ml-2"]) !!}</span> --}}
								<span class="terms-link d-block ml-2">I agree to the terms & conditions</span>
							</label>
							<span class="text-danger d-block">@{{ errors.agreement ? errors.agreement[0] : '' }}</span>
						</div>
	
						<button  type="submit">
							Register
						</button>
						<a href="" v-on:click.prevent="onClick" class="popup-link d-block text-center">Login</a>

			</form>
		</div>
	</div>
</transition>
</register-component>
