<cart-component inline-template>
<div>
        <ul class="align-items-center m-0">
            <li><span class="Item">@{{ itemsLength }} Item</span></li>
        </ul>
            
        <div class="tableParent">
            <div class="tableParentBox tableParent-title column">
                <div class="tableTitle row">
                    <div class="col-lg-8 ">
                        <h4>Your Product</h4>
                    </div>
                    <div class="col-lg-1">
                        <p>Quantity </p>
                    </div>
                    <div class="col-lg-2">
                        <p class="tableCenter">Price</p>
                    </div>
                    <div class="col-lg-1 tableRight"></div>
                </div>
    <!-- cafe first bike section -->
                <div >
                    <div class="d-flex" v-for="item in items">
                        <div class="col-lg-8">
                            <div class="d-flex justify-content-between">
                                <div class="tableImg align-self-center pl-3">
                                    <img class="" v-bind:src="'/img/' + item.src">
                                </div>
                                <div class="tableText pr-5">
                                <h3>Tracker: II - @{{ item.title }}</h3>
                                    <p>Color: @{{ item.color }}</p>
                                    <p>Power: Street Mode - 20 MPH</p>
                                    <p>Control: Intian Red</p>
                                    <p>Rack: No rack</p>
                                    <p>Control: Intian Red</p>
                                    <p>Rack: No rack</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 price1">
                            <div>
                                <div class="prev" v-on:click="inc(item)"><span class="top-arrow"></span></div>
                                <div class="number">@{{ item.qty }}</div>
                                <div class="next" v-on:click="dec(item)"><span class="bottom-arrow"></span></div>
                            </div>
                        </div>
                        <div class="col-lg-2 borderRb">
                            <div class="price">
                                <h3 class="first-price priceChild">@{{ item.price *  item.qty  }}.00$</h3>
                            </div>
                        </div>
                        <div class="col-lg-1 price1" style="border-right: none !important">
                            <div class="ball" v-on:click="deleteItem(item)">
                                <div class="line-left"></div>
                                <div class="line-right"></div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="row" v-if="items.length">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6 d-flex justify-content-around align-items-center">
                            <div class="">
                                <div class="paypal m-auto">
                                    <a href="javascript:void(0)"><img src="img/paypal.png"></a>
                                </div>
                            </div>
                            <div class="">
                                <div class="check-out m-auto">
                                    <a href="javascript:void(0)">Checkout</a>
                                </div>
                            </div>
                            <div class="">
                                <div class="table-footer-txt m-auto">
                                    <p>Total</p>
                                    <h3>$ @{{total}}.00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-else class="text-center mt-5 mb-5"><a href="/#testino">Add some Item?</a></div>
                </div>

        </div>
</div>
</cart-component>