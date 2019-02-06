<shop-bike-component inline-template>    
    <div class="displayNone" :class="{dBlock: mounted}">
        <div class="border-bottom mt-5">
            <div class="d-flex align-items-center justify-content-between">
                <h2>Our Electric Bikes</h2>
            <span class="Item">@{{ itemsLength }} Item</span>
            </div>
        </div>
    
    
        <div class="bikes row">
            <div class="bike-box col-sm-12 col-md-4 col-xl-3"  v-for="(bike , index) in bikes">
                <div class="hover-ball">+</div>
                <div class="bike-box_img">
                    <img v-bind:src="'/img/' + bike.src" alt="">
                </div>
                <div class="bike-box_desc">
                    <h4>@{{ bike.title }}</h4>
                    <p>$ @{{ bike.price }}</p>
                </div>
                <div class="hidden d-flex justify-content-around align-content-center">
                    <div class="hidden-txt align-self-center">Buy Now</div>
                    <div class="arrow">></div>
                </div>
            </div>
        </div>
    </div>
</shop-bike-component>