<reset-password-component
token=" {{isset($token) ?  $token : '' }}"
v-cloak 
inline-template>
<transition name="scale">
	<div class="popUp" :class="{'show': isVisible}" v-if="isVisible" v-on:click.self="closeModal()">
		<div class="reset-password">
			<h2  class="text-left pt-0 pb-4">Change password</h2>
			<form autocomplete="off" v-on:submit.prevent="onSubmit">
				@csrf
				<div class="form-group">              
					<label class="sr-only">Email</label>	
					<input onkeyup="this.setAttribute('value', this.value);" 
					value="" 
					v-model="form.email" 
					type="email" 
					name="email" 
					class="form-control" 
					placeholder="Email" 
					required>
					<span class="text-danger">@{{ errors.email ? errors.email.join('') : '' }}</span>
				</div>

				<div class="form-group">
					<label for="password" class="sr-only">{{ __('user.password') }}</label>
					<input 
					type="password" 
					class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
					name="password"  
					placeholder="New password" 
					v-model="form.password"
					v-on:focus="clearError('password')"
					required>
					<span class="text-danger">@{{ errors.password ? errors.password[0] : '' }}</span>
				</div>


				<div class="form-group">              
					<label class="sr-only">{{ __('app.confirm_password') }}</label>		
					<input onkeyup="this.setAttribute('value', this.value);"  
					value="" 
					v-on:focus="clearError('password')" 
					v-model="form.password_confirmation" 
					type="password" 
					name="password" 
					placeholder="Confirm password" 
					class="form-control" required>
					<span class="text-danger">@{{ errors.password ? errors.password[0] : '' }}</span>
				</div>

				<button  type="submit">Send</button>
			</form>
		</div>
	</div>
</transition>
</reset-password-component>