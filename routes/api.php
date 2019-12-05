<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/japan/modify/{id}', 'JapanController@modifyShow');
Route::resource('/japan', 'JapanController');
Route::resource('/qna', 'QnaController');
// Route::post('/formSubmit', 'JapanController@formSubmit');