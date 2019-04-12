<modal-confirmation inline-template>
    <transition name="scale">
        <div id="investPopUp"  class="popUps" :class="{'show': isVisible}" v-if='isVisible' v-on:click.self="closeModal()">
            <div class="login">
                <div class="addCart">Add To Cart</div>
                <button type="button" class="btn btn-success mt-4 px-4" v-on:click="addToCart({{$item}})">Yes</button>
                <button type="button" class="btn btn-danger mt-4 px-4" id="nono" v-on:click="closeModal">No</button>
            </div>
        </div>
    </transition>
</modal-confirmation>