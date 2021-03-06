
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
window.marked = require('marked');
window.hljs = require('./vendor/highlight.min.js');

// Vue.component('example', require('./components/Example.vue'));
Vue.component('parse', require('./components/Parse.vue'));
Vue.component('markdown', require('./components/Markdown.vue'));


const app = new Vue({
    el: '#app'
});
