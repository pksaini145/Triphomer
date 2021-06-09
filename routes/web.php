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
Route::get('/home', 'MainController@index')->name('home');
Route::get('/','MainController@index')->name('home');
Auth::routes();
Route::get('/hotels','MainController@hotels')->name('hotels');
Route::get('flights/{url?}','MainController@flights')->name('flights');
Route::get('cars','MainController@cars')->name('cars');
Route::get('mytrip','MainController@mytrip')->name('mytrip');
Route::get('/login','MainController@login')->name('login');
Route::get('/about-us','MainController@about')->name('about');
Route::get('/contact-us','MainController@contact')->name('contact');
Route::get('/terms-and-conditions','MainController@terms')->name('terms');
Route::get('help','MainController@help')->name('help');
Route::get('privacy-policy','MainController@privacy')->name('privacy');
Route::get('airlines','MainController@airlines')->name('airlines');
Route::get('hotel_destinations','MainController@hotel_destinations')->name('hotel_destinations');
Route::get('hotel_listing','MainController@hotel_listing')->name('hotel_listing');
Route::get('hotel_payment','MainController@hotel_payment')->name('hotel_payment');
Route::get('flight_listing','MainController@flight_listing')->name('flight_listing');
Route::get('flight_destinations','MainController@flight_destinations')->name('flight_destinations');
Route::get('flight_payment','MainController@flight_payment')->name('flight_payment');
Route::get('sitemap','MainController@sitemap')->name('sitemap');
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::group(['prefix' => 'dashboard','middleware' => 'auth'],function(){
    Route::view('/','dashboard.index');
    Route::get('/pages','AdminController@pages')->name('pages');
    Route::view('/image_upload','dashboard.image-upload')->name('image_upload');
    Route::view('/add-page','dashboard.new-page')->name('add-page');
    Route::get('/edit_page/{id}','AdminController@edit_page')->name('edit_page');
    Route::put('/update_page/{id}','AdminController@update_page')->name('update_page');
    Route::post('/save-page','AdminController@save_page')->name('save_page');
    Route::get('/flight-inner-pages','FlightController@innerpages')->name('flight.inner.pages');
    Route::get('/add-inner-pages','FlightController@add_inner_page')->name('add.inner.pages');
    Route::post('/save_inner_page','FlightController@save_inner_page')->name('save_inner_page');
    Route::get('/edit_inner_page/{id}','FlightController@edit_inner_page')->name('edit_inner_page');
    Route::put('/update_inner_page/{id}','FlightController@update_inner_page')->name('update_inner_page');
});





