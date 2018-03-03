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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('users', 'UsersController');

Route::resource('cars', 'CarsController');

Route::resource('vendors', 'VendorsController');

Route::resource('staff', 'StaffController');

Route::resource('customers', 'CustomerController');

Route::resource('bookings', 'BookingsController');

//Route::post('bookings', 'BookingsController@search');
Route::post('bookings/search', array('uses' => 'BookingsController@search'));


Route::post('bookings/addcustomer', array('uses' => 'BookingsController@addcustomer'));


Route::post('bookings/addstaff', array('uses' => 'BookingsController@addstaff'));


