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
    return view('front.home');
});

Route::get('about-us', function () {
    //return view('welcome');
    return view('front.aboutus');
});
Route::get('services', function () {
    //return view('welcome');
    return view('front.services');
});

Route::get('gallery', function () {
    //return view('welcome');
    return view('front.gallery');
});

Route::get('events', function () {
    //return view('welcome');
    return view('front.events');
});

Route::get('contact-us', function () {
    //return view('welcome');
    return view('front.contactus');
});


// Route::get('login',function(){
// 	return view('pages.login');
// });

//Routes::get('maigrat',)
Route::get('profile/{id}','hiralcontroller@showhiral')->name('profile');
Route::get('hirals','hiralcontroller@index')->name('hirals');

Route::group(['prefix' => 'admin','middleware' => 'is_admin'], function () {
    Route::get('/', function () {
        // Matches The "/admin/users" URL
        return view('pages.home');
    });

    Route::resource('users', 'Admin\UserController');

    Route::group(['prefix' => 'events'], function(){
        Route::get('/', "Admin\EventController@index")->name('admin.events.index');
        Route::get('create', "Admin\EventController@create")->name('admin.events.create');
        Route::post('/', "Admin\EventController@store")->name('admin.events.store');
        Route::get('/{event}', "Admin\EventController@show")->name('admin.events.show');
        Route::get('{event}/edit', "Admin\EventController@edit")->name('admin.events.edit');
        Route::put('/{event}', "Admin\EventController@update")->name('admin.events.update');
        Route::delete('/{event}', "Admin\EventController@destroy")->name('admin.events.destroy');   
    });
    
    Route::resource('category', 'Admin\CategoryController');

	Route::get('flot', function () {
	    return view('pages.flot');
	});

	Route::get('buttons', function () {
	    return view('pages.buttons');
	});

	Route::get('tables', function () {
		return view('pages.tables');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
