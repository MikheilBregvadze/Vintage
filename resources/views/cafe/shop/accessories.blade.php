<accessories-component inline-template>
   <div id="accessories" class="displayNone" :class="{dBlock: mounted}">
            <div>
                <div class="border-bottom mt-5">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2>Accessories</h2>
                    <span class="Item">@{{ itemsLength }} Item</span>
                    </div>
                </div>

                <div class="row bikes">
                    <div class="bike-box col-sm-12 col-md-4 col-xl-3 " v-for="(accessorie , index) in accessories">
                        <div>
                            <div class="hover-ball" v-on:click="addToStorage(index)">+</div>
                            <div class="bike-box_img">
                                <img v-bind:src="'/img/' + accessorie.src" alt="">
                            </div>
                            <div class="bike-box_desc">
                                <h4>@{{ accessorie.title }}</h4>
                                <p>$ @{{ accessorie.price }}</p>
                            </div>
                            <div class="hidden d-flex justify-content-around align-content-center">
                                <div class="hidden-txt align-self-center">Buy Now</div>
                                <div class="arrow">></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
</accessories-component>
