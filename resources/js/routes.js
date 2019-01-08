import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Gallery').default,
    },
    {
        path: '/build-yours',
        component: require('./views/BuildYours').default,// view-> about.js
    },
];

export default new VueRouter({
    routes,

    linkActiveClass: 'is-active',
}); 