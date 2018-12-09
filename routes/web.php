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
    return view('home');
});

Route::get('login',function(){
	return view('login');
});
Route::post('login','LoginController@login');
Route::get('register','UserController@create')->middleware('auth.guess'); // page ini berarti cuman bisa di akses guess
Route::post('register','UserController@store');

Route::get('home',function(){
	return view('home-forum');
});
Route::get('thread',function(){
	return view('forum-thread');
});
Route::get('profile',function(){
    return view('member.profile-other');
});
Route::get('inbox',function(){
    return view('member.inbox');
});

Route::get('/thread/create', 'ThreadController@create');
Route::post('/thread/store', 'ThreadController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/show','ThreadController@show');
