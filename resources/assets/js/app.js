/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
//Vue.component('header-component', require('./components/HeaderComponent.vue'));
Vue.component('navbar-component', require('./components/NavbarComponent.vue'));
Vue.component('photo-slider-component', require('./components/PhotoSliderComponent.vue'));
Vue.component('gallery-news-component', require('./components/GalleryAndNewsComponent.vue'));
Vue.component('info-component', require('./components/InfoComponent.vue'));
Vue.component('form-download-component', require('./components/FormDownloadComponent.vue'));
Vue.component('footer-component', require('./components/FooterComponent.vue'));

const app = new Vue({
    el: '#app',
});