<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/qna', 'QnaController');

Route::post('/login', 'UserController@login');
Route::post('/join', 'UserController@register');

Route::group(['middleware'=>'auth.api'], function(){
    Route::get('logout', 'UserController@logout');
});