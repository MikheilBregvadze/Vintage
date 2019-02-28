<modal-delete-component v-cloak inline-template>
        <transition name="scale">
        <div class="popUp"  :class="{'show': isVisible}" v-if='isVisible' v-on:click.self="closeModal()">
            <div class="modal-confirm">
                <div>
                    <div class="d-flex justify-content-end">
                       <div class="close mt-2" @click="closeModal">@include('icons.close')</div>
                    </div>
                    <div class="text-center mt-3 alert-status-icon">
                        <div>
                            <h3 class="text-center mb-5 pb-3">Are you sure you want to delete this @{{item}}?</h3>
                            <div class="d-flex justify-content-end">
                                <button class="mt-0 mb-4 btn btn-border mr-3" v-on:click.prevent="closeModal">cancel</button>
                                <button class="mt-0 mb-4 btn btn-bg" v-on:click.prevent="submit">yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </transition>
</modal-delete-component>