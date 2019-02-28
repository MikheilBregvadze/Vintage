<successfull-component v-cloak inline-template>
    <transition name="scale">
    <div class="popUp"  :class="{'show': isVisible}" v-if='isVisible' v-on:click.self="closeModal()">
        <div class="alert-status">
            <div>
                <div class="d-flex justify-content-end">
                   <div class="close mt-2" @click="closeModal">@include('icons.close')</div>
                </div>
                <div class="text-center mt-3 alert-status-icon">
                    @include('icons.successfull')
                    <div>
                        <h3 class="text-center p-0 pb-3">Coins are sent successfully
                                <span>View transactions on the <a href="/transactions">Transaction History</a> page</span>
                        </h3>
                        <button class="mt-0 mb-4 btn btn-bg" @click="closeModal">Back to home</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </transition>
 </successfull-component>