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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('users', 'UsersController');

Route::resource('cars', 'CarsController');

Route::resource('vendors', 'VendorController');

Route::resource('staff', 'StaffController');

Route::resource('customers', 'CustomerController');

Route::resource('bookings', 'BookingController');

