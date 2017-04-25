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


Route::get('/restaurants','RestaurantsController@index');
Route::post('/restaurants','RestaurantsController@store');
Route::get('/restaurants/create','RestaurantsController@create');
Route::get('/restaurants/{restaurant_id}','RestaurantsController@edit');
Route::put('/restaurants/{restaurant_id}','RestaurantsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout', 'RestaurantsController@logout');

Route::get('/restaurants/reviewscreen/{restaurant_id}', 'ReviewsController@index');
Route::get('/restaurants/createreview/{restaurant_id}', 'ReviewsController@create');
Route::post('/restaurants/createreview', 'ReviewsController@store');

Route::get('/', ['middleware' => 'admin', function () {
    return view('adminlandingpage');
}]);

Route::get('/userlist','UserController@index');
Route::get('/userlist/{id}','UserController@update');


Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/myprofile', function () {
    return view('myprofile');
});

Route::get('/passwords/reset', function () {
    return view('/auth/passwords/reset');
});

Route::post('/passwords/reset/{id}', 'UserController@changepassword');