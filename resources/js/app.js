/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');


window.Vue = require('vue');
//window.Vuex = require('vuex');
//import Vuex from 'vuex';
import VModal from 'vue-js-modal';

Vue.use(VModal);
//Vue.use(Vuex);
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
Vue.component('form-component', require('./components/FormComponent.vue').default);
Vue.component('form-retarget-component', require('./components/FormRetargetComponent.vue').default);
Vue.component('form-buy-component', require('./components/FormBuyComponent.vue').default);
Vue.component('form-buy2-component', require('./components/FormBuy2Component.vue').default);
Vue.component('review-component', require('./components/ReviewComponent.vue').default);
Vue.component('model-details-component', require('./components/ModelDetailsComponent').default);
Vue.component('header-component', require('./components/elements/HeaderComponent').default);
Vue.component('header-sticky-component', require('./components/elements/HeaderStickyComponent').default);
Vue.component('main-hooper-component', require('./components/MainHooperComponent').default);
Vue.component('retargeting-component', require('./components/RetargetingComponent').default);
Vue.component('range-slider-component', require('./components/RangeSliderComponent').default);
Vue.component('range-slider-component-period', require('./components/RangeSliderComponentPeriod').default);
Vue.component('tab-bar', require('./components/elements/TabBar').default);
Vue.component('classified', require('./components/Classified').default);
Vue.component('steps', require('./components/Steps').default);
Vue.component('yandex-map-component', require('./components/YandexMapComponent').default);
Vue.component('touch-bar-map-component', require('./components/TouchBarMapComponent').default);
Vue.component('modal-component', require('./components/elements/ModalComponent').default);
Vue.component('modal-retarget-component', require('./components/elements/ModalRetargetComponent').default);
Vue.component('next-action-component', require('./components/elements/NextActionComponent').default);
Vue.component('event-handler-component', require('./components/EventHandlerComponent').default);
Vue.component('scroll-event-handler-component', require('./components/ScrollEventHandlerComponent').default);

/*const store = new Vuex.Store({
    state: {
        model: 0
    },
    mutations: {
        change (state, current_model) {
            state.model = current_model;
        }
    }
});*/

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
   // store
});
