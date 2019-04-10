import VueRouter from 'vue-router';

let routes = [
    {
        path: '/dashboard/',
        component: require('./views/Gallery').default,
    },
    {
        path: '/dashboard/build-yours',
        component: require('./views/BuildYours').default,// view-> about.js
    },
];

export default new VueRouter({
    routes,
    mode: 'history',
    linkActiveClass: 'is-active',
}); 

