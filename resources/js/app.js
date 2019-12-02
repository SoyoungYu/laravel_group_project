require('./bootstrap');

window.Vue = require('vue');

window.VueRouter=require('vue-router').default;

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;

Vue.use(VueRouter, VueAxios, axios);

import Parent from './components/App.vue'
import Main from './components/MainComponent.vue'
import Login from './components/LoginComponent'
import Join from './components/JoinComponent'
import Member from './components/MemberComponent'
import Japan from './components/JapanComponent'
import QnA from './components/QnAList'
import QnACreate from './components/QnACreate.vue'
import QnAView from './components/QnAView.vue'

const router = new VueRouter({
    mode : 'history',
    routes : [
        {
            path : '/',
            component : Main
        },
        {
            path : '/login',
            component : Login
        },
        {
            path : '/join',
            component : Join
        },
        {
            path : '/member',
            component : Member
        },
        {
            path : '/japan',
            component : Japan
        },
        {
            path : '/qna',
            component : QnA
        },
        {
            path : '/qna/create',
            component : QnACreate
        },
        {
            path : '/qna/view',
            component : QnAView
        },
    ]
});

const app = new Vue({
    el : '#app',
    router,
    render : (h) => h(Parent)
});