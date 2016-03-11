<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/', function () {
    return view('index');
});

Route::match(['get', 'post'], '/account/profile', "AccountController@profile");
Route::match(['get', 'post'], '/account/social_media', "AccountController@social_media");
Route::match(['get', 'post'], '/account/settings', "AccountController@settings");

Route::match(['get', 'post'], '/account/directory', "AccountController@directory");
Route::match(['get', 'post'], '/account/add_directory', "AccountController@add_directory");
Route::match(['get', 'post'], '/account/logout', "AccountController@logout");

Route::match(['get', 'post'], '/account/add_event', "AccountController@add_event");

Route::match(['get', 'post'], '/account/register', "AuthCostumController@register");
Route::match(['get', 'post'], '/account/login', "AuthCostumController@login");



// Route::match(['get', 'post'], '/account/profile', "AuthController@profile");


Route::get('/test', function () {
    
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

$settings = array(
				"social_media" => array(
					"facebook" => "http://facebook.com",
			        'twitter' => 'https://twitter.com/keudee',
			        'instagram' => 'https://Instagram.com',
			        'pinterest' => 'https://Pinterest.com',
			        'flickr' => 'https://flickr.com'
				),

				"contact_person" => array(
					"email" => "contact@halalaceh.com",
			        'phone' => '+62 852 7054 6820'
				),

				"meta_information" => array(
					'description' => "Keudee merupakan pasar online terbesar di Aceh, Setiap individu dapat berjualan dan mengelola toko online mereka secara mudah dan gratis. Jual beli jadi lebih menyenangkan. Punya toko online?",
			        'title' => "Keudee - Temukan Apapun di Aceh",
			        'keywords' => "Temukan Apapun di Keudee",
			        'author' => "firdaus, fird0s, Muhammad Firdaus",
			        'location' => 'Lampaseh Kota, Banda Aceh',
			        'copyright' => 'Copyright 2015, Keudee.com'
				)
			);
