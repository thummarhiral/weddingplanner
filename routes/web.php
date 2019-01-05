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
    //return view('welcome');
    return view('pages.home');
});

Route::get('flot', function () {
    return view('pages.flot');
});

Route::get('buttons', function () {
    return view('pages.buttons');
});

Route::get('tables', function () {
	return view('pages.tables');
});

// Route::get('login',function(){
// 	return view('pages.login');
// });

//Routes::get('maigrat',)
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
