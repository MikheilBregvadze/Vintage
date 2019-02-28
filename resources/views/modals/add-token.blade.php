<transition name="scale">
<div class="popUp"  :class="{'show': showModal}" v-if='showModal' v-on:click.self="toggleModal()">
        <div class="new-wallet">
            <div>
                <div>
                    <div class="d-flex justify-content-between">
                        <h2 class="text-left p-0 pb-3">Add Token</h2>
                        <div class="close mt-2" @click="toggleModal">@include('icons.close')</div>
                    </div>
                    <form v-on:submit.prevent="onSubmit">
                        <div class="form-group">
                            <input id="email" 
                            type="text" 
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                            name="name" 
                            v-on:focus="clearError('name')"
                            value="{{ old('name') }}" 
                            placeholder="Token name" 
                            v-model="form.name"
                            autofocus>
                           <span class="text-danger">@{{ errors.name ? errors.name[0] : '' }}</span>
                        </div>

                        <div class="form-group">
                            <input id="password" 
                            type="text" 
                            class="form-control{{ $errors->has('addresses') ? ' is-invalid' : '' }}" 
                            name="addresses"
                            v-on:focus="clearError('address')"  
                            value="{{ old('address') }}"
                            placeholder="IP addresses" 
                            v-model="form.address">
                            <span class="text-danger">@{{ errors.address ? errors.address[0] : '' }}</span>
                        </div>
                        
                    @php
                    $expiration = json_encode([
                                    0 => '1 day',
                                    1 => '1 week',
                                    2 => '1 month',
                                    3 => '1 year',
                                    4 => '2 years',
                                    5 => '3 years'
                                ]);
                    @endphp
                        <div class="form-group" @mouseover="clearError('expiration')">
                            {{-- <label for="">Token expiration </label> --}}
                            <select-component 
                                :options="{{$expiration}}" 
                                :name="'expiration'"
                                :placeholder="'Token expiration'">
                            </select-component>  
                            <span class="text-danger">@{{ errors.expiration ? errors.expiration[0] : '' }}</span>
                        </div>

                        <div class="custom-control custom-checkbox mt-4 pt-3">
                                <input type="checkbox" class="custom-control-input" v-model="form.agreement" value="1" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">
                                    {{-- <span>{!!__('notifications.agree_terms', ["href" => route('terms'), "class" => "terms-link d-inline ml-2"]) !!}</span> --}}
                                    <span class="terms-link d-block ml-2">I agree to the terms & conditions</span>
                                </label>
                                <span class="text-danger d-block">@{{ errors.agreement ? errors.agreement[0] : '' }}</span>
                            </div>

                        <button type="submit" class="btn btn-bg mb-2">Create token </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</transition>