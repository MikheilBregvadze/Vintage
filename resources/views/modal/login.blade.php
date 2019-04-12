<login-component v-cloak inline-template>
    <transition name="scale">
        <div class="popUp" :class="{'show': isVisible}" v-if='isVisible' v-on:click.self="closeModal()">
            <div class="login">
                <div class="container" style="position: relative; z-index: 25">
                    <div class=" justify-content-center mt-5">
                        <div class="loginHeader">{{ __('Login') }}</div>
                            <form v-on:submit.prevent="onSubmit">
                                @csrf
                                <div class="loginInputs form-group">
                                    <label for="email" class="pl-3">{{ __('E-Mail Address') }}</label>

                                    <div class="col-12">
                                        <input 
                                            id="email" 
                                            type="email" 
                                            class="inputStyle form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                            name="email" 
                                            value="{{ old('email') }}" 
                                            v-model="form.email"
                                            required autofocus>
                                            <span class="text-danger">@{{ errors.email ? errors.email.join('') : '' }}</span>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="loginInputs form-group">
                                    <label for="password" class="pl-3">{{ __('Password') }}</label>

                                    <div class="col-12">
                                        <input 
                                            id="password" 
                                            type="password" 
                                            class="inputStyle form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                            name="password"
                                            v-model="form.password"
                                            required>
                                            <span class="text-danger">@{{ errors.email ? errors.email.join('') : '' }}</span>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div style="padding-left: 36px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label " for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</login-component>