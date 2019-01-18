<cart-component inline-template>
<div>
    	<div class="navigation">
                <div class="navbar navbar-inverse nav-border">
                    <ul class="nav navbar-nav  flex-lg-row align-items-center">
                        <li><a class="circleLink" href="javascript:void(0)"><i class="fas fa-home"></i></a></li>
                        <li><a class="linkAfter" href="javascript:void(0)">Home</a></li>
                        <li><a class="linkAfter" href="#!">Shop</a></li>
                        <li><a class=" linkAfterLast" href="javascript:void(0)">Your Card</a></li>
                    </ul>
                    <ul class="nav navbar-nav flex-row align-items-center">
                        <li><span class="Item">@{{ length }} Item</span></li>
                    </ul>
                </div>
            </div>
    <div class="tableParent" :class="{ 'd-none': isShown }">
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
                <div class="row">
                    <div v-for="item in items">
                        <div class="col-lg-8 ">
                            <div class="row justify-content-around">
                                <div class="tableImg col-sm-7 align-self-center">
                                    <img class="col-md-12" v-bind:src="'/img/' + item.src">
                                </div>
                                <div class="tableText col-sm-5">
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
                        <div class="col-lg-1">
                            <div class="d-flex">
                                <div class="column m-auto">
                                    <div class="prev" v-on:click="inc(item)"><span class="top-arrow"></span></div>
                                    <div class="number">@{{ item.qty }}</div>
                                    <div class="next" v-on:click="dec(item)"><span class="bottom-arrow"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-flex">
                            <div class="m-auto">
                            <h3 class="first-price">@{{ item.price *  item.qty  }}.00$</h3>
                            </div>
                        </div>
                        <div class="col-lg-1 d-flex tableRight">
                            <div class="ball m-auto" v-on:click="deleteItem(item)">
                                <div class="line-left"></div>
                                <div class="line-right"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="paypal m-auto">
                                        <a href="javascript:void(0)"><img src="img/paypal.png"></a>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="check-out m-auto">
                                        <a href="javascript:void(0)">Checkout</a>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="table-footer-txt m-auto">
                                        <p>Total</p>
                                        <h3>$ @{{total}}.00</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                {{-- <div class="col-lg-8">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <div class="paypal m-auto">
                                <a href="javascript:void(0)"><img src="img/paypal.png"></a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="check-out m-auto">
                                <a href="javascript:void(0)">Checkout</a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="table-footer-txt m-auto">
                                <p>Total</p>
                                <h3>$ @{{total}}.00</h3>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="text-center mt-5"><a href="/">Add some Item?</a></div>
    </div>
</div>
</cart-component>