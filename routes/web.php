<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dologout', function (Illuminate\Http\Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $redirect_uri = $request->get('redirect_uri');
    return redirect($redirect_uri);
});

Route::get('/home', 'HomeController@index')->name('home');
