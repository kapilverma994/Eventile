<?php
Route::group(['namespace' => 'Auth'], function () {
    Route::post('register', 'RegisterController@register');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->middleware('auth:sanctum');
    Route::post('me', function () {
        return auth()->user();
    })->middleware('auth:sanctum');
});
