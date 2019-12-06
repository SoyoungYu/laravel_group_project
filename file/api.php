<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/qna', 'QnaController');

Route::resource('/member', 'MemberController');

Route::resource('/join', 'JoinController');

Route::resource('/login', 'LoginController');