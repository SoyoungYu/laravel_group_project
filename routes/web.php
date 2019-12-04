<?php

Route::get('/{any?}', function() {
    return view('home');
})->where('any','.*');

Route::post('/member/image', 'MemberController@image');