/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
window.Vuex = require('vuex');
//import Vuex from 'vuex';

Vue.use(Vuex);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('hooper-component', require('./components/HooperComponent.vue').default);
Vue.component('info-component', require('./components/InfoComponent.vue').default);
Vue.component('color-choose-component', require('./components/ColorChooseComponent.vue').default);
Vue.component('model-details-component', require('./components/ModelDetailsComponent').default);

const store = new Vuex.Store({
    state: {
        model: 0
    },
    mutations: {
        change (state, current_model) {
            state.model = current_model;
        }
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store
});
