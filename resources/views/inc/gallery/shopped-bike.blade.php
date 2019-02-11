<bike-component
v-cloak 
inline-template>
    {{-- <div class="row">
        <div class="bike-box col-sm-12 col-md-4 col-xl-3" v-for="(bike, index) in bikes">
            <div class="hover-ball" v-on:click="showconfirmation(index)">+</div>
            <div class="bike-box_img">
                <img v-bind:src="'/img/' + bike.src" alt="">
            </div>
            <div class="bike-box_desc">
            <h4>@{{bike.title}}</h4>
                <p>@{{bike.description}}</p>
            </div>
            <div class="hidden d-flex justify-content-around align-content-center">
                <div class="hidden-txt align-self-center">Buy Now</div>
                <div class="arrow">></div>
            </div>
        </div>
    </div> --}}

        <div class="bike-box col-sm-12 col-md-4 col-xl-3">
            <div class="hover-ball" v-on:click="showconfirmation({{$item->id}})">+</div>
            <div class="bike-box_img">
                <img src="http://127.0.0.1:8000/img/product/{{ $item->id .'/'. $item->file }}" alt="">
            </div>
            <div class="bike-box_desc">
                <h4>{{ $item->title }}</h4>
                <p>{{ $item->description }}</p>
            </div>
            <div class="hidden d-flex justify-content-around align-content-center">
                <div class="hidden-txt align-self-center">Buy Now</div>
                <div class="arrow">></div>
            </div>
        </div>

</bike-component>