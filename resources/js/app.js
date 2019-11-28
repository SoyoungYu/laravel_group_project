/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.VueRouter=require('vue-router').default;

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;

Vue.use(VueRouter, VueAxios, axios);

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
Vue.component('qna1-component', require('./components/QnAList.vue').default);
Vue.component('qna2-component', require('./components/QnACreate.vue').default);
Vue.component('qna3-component', require('./components/QnAView.vue').default);

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

const qna_list = new Vue({
    el: '#qna1',
});

const qna_create = new Vue({
    el : '#qna2',
});

const qna_view = new Vue({
    el : '#qna3',
});

// const qna2 = new Vue({
//     el: '#qna2',
// });

// const qna3 = new Vue({
//     el: '#qna3',
// });

// let QnALayout = require('./components/QnAParent.vue');

// const QnAList = Vue.component('QnAList', require('./components/QnAList.vue'));
// const QnACreate = Vue.component('QnACreate', require('./components/QnACreate.vue'));
// const QnAView = Vue.component('QnAView', require('./components/QnAView.vue'));

// const router = new VueRouter({ mode : 'history', routes : routes});

// const routes = [
//     {
//         name : 'QnAList',
//         path : '/QnA',
//         component : QnAList
//     },
//     {
//         name : 'QnACreate',
//         path : '/QnA/create',
//         component : QnACreate
//     },
//     {
//         name : 'QnAView',
//         path : '/QnA/:id',
//         component : QnAView
//     }
// ];

// new Vue(
//     Vue.util.extend(
//         { router },
//         QnALayout
//     )
// ).$mount('#qna');