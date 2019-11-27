<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//메인페이지
Route::get('/', function () {
    return view('main');
});

//로그인 화면
Route::get('/login', function() {
    return view('login');
});

//회원가입 화면
Route::get('/join', function() {
    return view('join');
});

//조원소개 페이지
Route::get('/member', function() {
    return view('member');
});

//현지학기제 페이지
Route::get('/japan', function() {
    return view('japan');
});

Route::get('/QnA', 'QnaController@home');
Route::get('/QnA/fetch', 'QnaController@fetch');