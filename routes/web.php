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

Route::get('/', function () {
    return view('guest.home-guest');
});

Route::get('login',function(){
	return view('guest.login');
});
Route::get('register',function(){
	return view('guest.register');
});
Route::get('home',function(){
	return view('member.home-forum');
});
Route::get('thread',function(){
	return view('member.forum-thread');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
