/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('main-component', require('./components/MainComponent.vue').default);
Vue.component('login-component', require('./components/LoginComponent.vue').default);
Vue.component('join-component', require('./components/JoinComponent.vue').default);
Vue.component('mem-component', require('./components/MemberComponent.vue').default);
Vue.component('jpn-component', require('./components/JapanComponent.vue').default);
Vue.component('qna1-component', require('./components/QnAComponent1.vue').default);
Vue.component('qna2-component', require('./components/QnAComponent2.vue').default);
Vue.component('qna3-component', require('./components/QnAComponent3.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const main = new Vue({
    el: '#main',
});

const login = new Vue({
    el: '#login',
});

const join = new Vue({
    el: '#join',
});

const member = new Vue({
    el: '#member',
});

const japan = new Vue({
    el: '#japan',
});

const qna1 = new Vue({
    el: '#qna1',
});

const qna2 = new Vue({
    el: '#qna2',
});

const qna3 = new Vue({
    el: '#qna3',
});