
require('./bootstrap');

import Vue from 'vue';
import router from './routes';
import VueRouter from 'vue-router';
import VideoComponent from './components/VideoComponent.js'


Vue.use(VueRouter); //npm install vue-router --save dev
window.Vue = require('vue');

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
        VideoComponent
    }
});
