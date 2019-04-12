
require('./bootstrap');

import Vue from 'vue'
import Swiper from 'swiper'
import router from './routes'
import VueRouter from 'vue-router'
import VideoComponent from './components/VideoComponent.js'
import BikeComponent from './components/BikeComponent.js'
import ModalConfirmation from './components/ModalConfirmation.js'
import CartComponent from './components/CartComponent.js'
import AccessoriesComponent from './shop/AccessoriesComponent.js'
import ShopBikeComponent from './shop/ShopBikeComponent.js'
import ApporelComponent from './shop/ApporelComponent.js'
import ShopAddedComponent from './shop/ShopAddedComponent.js'


Vue.use(VueRouter); //npm install vue-router --save dev
window.Vue = require('vue');

Vue.component('select-component', require('./components/SelectComponent.vue').default);

const app = new Vue({
    el: '#app',
    router,
    components:{
        VideoComponent,
        BikeComponent,
        ModalConfirmation,
        CartComponent,
        AccessoriesComponent,
        ShopBikeComponent,
        ApporelComponent,
        ShopAddedComponent
    },
});

window.onload = function () {
    var mySwiper = new Swiper ('.swiper-container-customers', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        breakpoints: {
          576: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
      
          768: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          992: {
            slidesPerView: 1,
            spaceBetween: 30,
          },
        },
    })
}
