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
//1>조원 목록 페이지
Route::get('/members', 'MembersController@index');
Route::get('/members/fetch', 'MembersController@fetch');

//2>생성하기
Route::post('/members/create', 'MembersController@create');

//3>수정하기
Route::patch('/members/update/{id}', 'MembersController@update');

//4>삭제하기
Route::delete('/members/delete/{id}', 'MembersController@delete');

//현지학기제 페이지
Route::get('/japan', function() {
    return view('japan');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
