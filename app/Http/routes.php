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




Route::match(['get', 'post'], '/', "Portal@home")->name('home');

Route::match(['get', 'post'], '/account/profile', "AccountController@profile")->name('account_profile');
Route::match(['get', 'post'], '/account/social_media', "AccountController@social_media")->name('account_social_media');
Route::match(['get', 'post'], '/account/settings', "AccountController@settings")->name('account_settings');

Route::match(['get', 'post'], '/account/directory', "AccountController@directory")->name('account_directory');
Route::match(['get', 'post'], '/account/directory/edit/{id}', "AccountController@edit_directory")->name('account_edit_directory');
Route::match(['get', 'post'], '/account/directory/delete/{id}', "AccountController@delete_directory")->name('delete_directory');
Route::match(['get', 'post'], '/account/directory/add_directory', "AccountController@add_directory")->name('account_add_directory');
Route::match(['get', 'post'], '/account/logout', "AccountController@logout")->name('account_logout');

Route::match(['get', 'post'], '/account/event/edit/{id}', "AccountController@edit_event")->name('account_edit_event');
Route::match(['get', 'post'], '/account/event/delete/{id}', "AccountController@delete_event")->name('account_delete_event');
Route::match(['get', 'post'], '/account/event/add_event', "AccountController@add_event")->name('account_add_event');


Route::match(['get', 'post'], '/account/tour/edit/{id}', "AccountController@edit_tour_package")->name('edit_tour_package');
Route::match(['get', 'post'], '/account/tour/add_tour', "AccountController@add_tour_package")->name('account_add_tour_package');
Route::match(['get', 'post'], '/account/tour/', "AccountController@tour_package")->name('account_tour_package');
Route::match(['get', 'post'], '/account/tour/delete/{id}', "AccountController@delete_tour_package")->name('delete_tour_package');

Route::match(['get', 'post'], '/account/event', "AccountController@event")->name('account_event');


Route::match(['get', 'post'], '/account/register', "AuthCostumController@register")->name('account_register');
Route::match(['get', 'post'], '/account/login', "AuthCostumController@login")->name('account_login');


//  Hotel
Route::match(['get'], '/events', "Portal@events")->name('events');


// Hotel
Route::match(['get'], '/tour', "Portal@tour_package")->name('tour_package');
Route::match(['get'], '/tour/{slug_url}', "Portal@get_tour_package")->name('get_tour_package');



// Hotel
Route::match(['get'], '/hotel', "Portal@hotel")->name('hotel');
Route::match(['get'], '/hotel/{slug_url}', "Portal@get_hotel")->name('get_hotel');


// Restaurant
Route::match(['get'], '/restaurant', "Portal@restaurant")->name('restaurant');
Route::match(['get'], '/restaurant/{slug_url}', "Portal@get_restaurant")->name('get_restaurant');


// Mosque
Route::match(['get'], '/mosque', "Portal@mosque")->name('mosque');
Route::match(['get'], '/mosque/{slug_url}', "Portal@get_mosque")->name('get_mosque');


// Tourist Attraction
Route::match(['get'], '/tourist_attraction', "Portal@tourist_attraction")->name('tourist_attraction');
Route::match(['get'], '/tourist_attraction/{slug_url}', "Portal@get_tourist_attraction")->name('get_tourist_attraction');
Route::match(['get'], '/spot/{category}', "Portal@spot_category")->name('spot_category');


// Event
Route::match(['get'], '/event', "Portal@event")->name('event');


// book-tour

Route::match(['get'], '/book-tour', "Portal@BookTour")->name('booktour');

// Qibla Direction
Route::match(['get'], '/qibla-direction', "Portal@QiblaDirection")->name('qibladirection');

// Reach Mosque
Route::match(['get'], '/reach-mosque', "Portal@ReachMosque")->name('reachmosque');

Route::match(['get'], '/aboutus', "Aboutus@aboutus")->name('aboutus');

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
