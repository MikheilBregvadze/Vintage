<shop-added-component inline-template>
    <div class="container">
            <div class="navigation">
                <div class="nav-border">
                    <div class="displayNone" :class="{dBlock: mounted}">
                        <div class="row align-items-center mt-5 pt-5">
                            <div class="col-lg-4">
                                <div class="imgSize">
                                        <img class="" src="img/helmet.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 pl-5 pr-5">
                                <h1 class="font-weight-bold">Cafe Helmet</h1>
                                <div class="mt-4 mb-4">
                                    Look awesome and be safe while out on the streets with our limited edition Cafe Helmet. The interior features a custom-shaped EPS safety shell and a hand-stitched micro suede liner.
                                </div>
                                <div class="listStyle mt-5">
                                    <li>Injection-molded ABS outer shell with hand-painted black and gold finish</li>
                                    <li>Expanded polystyrene inner shell</li>
                                    <li>Hand-sewn brushed Lycra liner with contrasting diamond-stitched quilted open-cell foam padding</li>
                                    <li>Meets DOT safety standards</li>
                                </div>
                            </div>
                            <div class="col-lg-2 borderNone">
                            <div class="">
                                    <div >
                                        <div class="borderAround pt-5 pb-4">
                                            <h3 class="text-center">$ 79.00</h3>
                                            <p class="text-center">Extra Taxes +4%</p>
                                        </div>
                                        <div class="d-flex height">
                                            <div class="filters">
                                                    @php
                                                    $crypto = json_encode([
                                                                    0 => 'Small - $ 79.00',
                                                                    1 => 'Medium - $ 96.00',
                                                                    2 => 'Large - $ 118.00'
                                                                ]);
                                                    @endphp
                                                <div class="form-group">
                                                        <select-component 
                                                            :options="{{$crypto}}" 
                                                            :name="'date'"
                                                            :placeholder="'Small - $ 79.00'">
                                                        </select-component>      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="paddingLR">
                                    <div class="d-flex justify-content-between mt-2 mb-2">
                                        <div class="imgSizeRight">
                                                <img src="img/simg1.png" alt="">
                                        </div>
                                        <div class="imgSizeRight">
                                                <img src="img/simg2.png" alt="">
                                        </div>
                                        <div class="imgSizeRight">
                                                <img src="img/simg3.png" alt="">
                                        </div>
                                    </div>

                                    <button class="myBtn" type="submit">Add to cart</button>
                                </div>

                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </shop-added-component>


<shop-added-component inline-template>        
        <div class="backgroundBlack displayNone" :class="{dBlock: mounted}">
            <div class="footer-container d-flex align-items-center">
                <div class="col-xl-8 mb-5 pb-5 pr-5">
                    <h1 class="pt-4 mt-5 mb-5">Finding Your Size</h1>
                    <p class="m-0">Finding Your Size</p>
                    <p>A good fit is vital. We offer 4 sizes for maximum safety and comfort.</p>
                    <p class="pr-5 mr-5">Wrap a flexible tape measure around the largest portion of your head—about 2.5 centimeters above your eyebrows. Alternatively, wrap a string around your head, and then measure the length of string with a ruler or yardstick.</p>
                </div>
                <div class="col-xl-4">
                        <div class="d-flex pr-2 pl-2 justify-content-between border-bottom">
                            <p class="mb-0">Size</p>
                            <p class="mb-0">Head Circumference (CM)</p>
                        </div>
                    <div class="searchFiledSize">
                        <div class="d-flex  pr-2 pl-2 justify-content-between align-items-center">
                            <p class="mb-0">S</p>
                            <p class="mb-0">55-56</p>
                        </div>

                        <div class="d-flex  pr-2 pl-2 justify-content-between align-items-center">
                            <p class="mb-0">M</p>
                            <p class="mb-0">57-58</p>
                        </div>

                        <div class="d-flex  pr-2 pl-2 justify-content-between align-items-center">
                            <p class="mb-0">M</p>
                            <p class="mb-0">57-58</p>
                        </div>

                        <div class="d-flex  pr-2 pl-2 justify-content-between align-items-center">
                            <p class="mb-0">M</p>
                            <p class="mb-0">57-58</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</shop-added-component>