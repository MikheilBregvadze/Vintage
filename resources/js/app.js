
require('./bootstrap');

import Vue from 'vue'
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
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('articles', require('./components/vuescript/Articles.vue'));

// import GallerySlider from './components/GallerySlider.js';

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
