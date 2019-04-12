import Vue from 'vue'
import axios from 'axios'

Vue.component('login-button', require('./buttons/LoginButton.vue').default);

import LoginComponent from './main/LoginComponent.js'

const app = new Vue({
    el: '#app',
    components: {
        LoginComponent
    }
});
