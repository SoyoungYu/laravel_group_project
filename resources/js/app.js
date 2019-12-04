require('./bootstrap');

window.Vue = require('vue');

window.VueRouter=require('vue-router').default;

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;

Vue.use(VueRouter, VueAxios, axios);

import Parent from './components/App'
import Main from './components/MainComponent'
import Login from './components/LoginComponent'
import Join from './components/JoinComponent'
import MemberList from './components/MemberList'
import MemberCreate from './components/MemberCreate'
import MemberUpdate from './components/MemberUpdate'
import Japan from './components/JapanComponent'
import QnAList from './components/QnAList'
import QnACreate from './components/QnACreate'
import QnAView from './components/QnAView'

const router = new VueRouter({
    mode : 'history',
    routes : [
        {
            path : '/',
            name : 'Main',
            component : Main
        },
        {
            path : '/login',
            name : 'Login',
            component : Login
        },
        {
            path : '/join',
            name : 'Join',
            component : Join
        },
        {
            path : '/member', // 목록 출력하기
            name : 'MemberList',
            component : MemberList
        },
        {
            path : '/member/create', // 생성하기
            name : 'MemberCreate',
            component : MemberCreate,
            props : true
        },
        {
            path : '/member/update', // 수정하기
            name : 'MemberUpdate',
            component : MemberUpdate,
            props : true
        },
        {
            path : '/japan',
            name : 'Japan',
            component : Japan
        },
        {
            path : '/qna',
            name : 'QnAList',
            component : QnAList
        },
        {
            path : '/qna/create',
            name : 'QnACreate',
            component : QnACreate
        },
        {
            path : '/qna/view',
            name : 'QnAView',
            component : QnAView,
            props : true
        },
    ]
});

const app = new Vue({
    el : '#app',
    router,
    render : (h) => h(Parent)
});