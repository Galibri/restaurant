<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'HomeController@index')->name('frontend.index');
Route::post('/reservation', 'HomeController@make_reservation')->name('frontend.reservation');
Route::post('/contact', 'HomeController@contact')->name('frontend.contact');

Auth::routes();

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::resource('/slider', 'SliderController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/food', 'FoodController');
    Route::put('/food/status/{food}', 'FoodController@status')->name('food.status');
    Route::delete('/food/image/{food}', 'FoodController@delete_product_image')->name('food.delete-image');
    Route::resource('/reservation', 'ReservationController')->only(['index', 'show', 'update', 'destroy']);
    Route::resource('/contact', 'ContactController')->only(['index', 'show', 'update', 'destroy']);

});