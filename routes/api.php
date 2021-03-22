<?php
Route::group(['namespace'=>'Auth'],function(){

    Route::post('register','RegisterController@register');
    Route::post('login','LoginController@login');
    Route::post('me',function(){
        return auth()->user();
    })->middleware('auth:sanctum');
});
    
