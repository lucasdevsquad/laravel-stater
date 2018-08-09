
require('./bootstrap');

window.Vue = require('vue');

Vue.component('dashboard-menu', require('./components/dashboard/Menu.vue'));
Vue.component('dashboard', require('./components/dashboard/Dashboard.vue'));
Vue.component('users', require('./components/dashboard/Users.vue'));

const app = new Vue({
    el: '#app'
});
