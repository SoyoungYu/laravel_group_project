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
import Member from './components/MemberComponent'
import Japan from './components/JapanComponent'
import JpnCreate from './components/JpnCreateComponent'
import JpnModify from './components/JpnModifyComponent'
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
            path : '/member',
            name : 'Member',
            component : Member
        },
        {
            path : '/japan',
            name : 'Japan',
            component : Japan
        },
        {
            path : '/japan/jpnCreate',
            name : 'JpnCreate',
            component : JpnCreate
        },
        {
            path : '/japan/jpnModify',
            name : 'JpnModify',
            component : JpnModify
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