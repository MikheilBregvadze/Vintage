<apporel-component inline-template>
    <div id="apparel" class="displayNone" :class="{dBlock: mounted}">
        <div class="border-bottom mt-5">
            <div class="d-flex align-items-center justify-content-between">
                <h2>Apporel</h2>
            <span class="Item">@{{ itemsLength }} Item</span>
            </div>
        </div>
    
        <div class="bikes row">
            <div class="bike-box col-sm-12 col-md-4 col-xl-3" v-for="apporel in apporels">
                <div class="hover-ball">+</div>
                <div class="bike-box_img">
                    <img v-bind:src="'/img/' + apporel.src" alt="">
                </div>
                <div class="bike-box_desc">
                    <h4>@{{ apporel.title }}</h4>
                    <p>$ @{{ apporel.price }}</p>
                </div>
                <div class="hidden d-flex justify-content-around align-content-center">
                    <div class="hidden-txt align-self-center">Buy Now</div>
                    <div class="arrow">></div>
                </div>
            </div>
        </div>
    </div>
</apporel-component>