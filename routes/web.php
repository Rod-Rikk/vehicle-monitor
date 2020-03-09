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

Route::resource('/vehicles', 'VehicleController');

Route::resource('/customers', 'CustomerController');

Route::resource('/jobs', 'JobController');

Route::get('/job_customers', 'JobController@getCustomers');

Route::get('/job_vehicles', 'JobController@getVehicles');

Route::get('/create-job', 'JobController@create');

Route::get('/autocomplete-ajax', 'JobController@dataAjax');

// Route::get('/finished_jobs','JobController');

Route::get('/admin', 'HomeController@adminIndex')->name('admin');
