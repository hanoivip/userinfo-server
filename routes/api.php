<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
    
Route::middleware('auth:api')->get('/user/{user}', function (App\user $user) {
    return $user;
});
    
Route::any('/register', "Auth\RegisterController@apiRegister");