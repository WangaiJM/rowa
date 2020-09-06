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

Route::get('/', 'LandingController@index');
Route::get('/about', 'LandingController@about');

Route::get('/personal_motor', 'LandingController@personal_motor');
Route::get('/personal_family', 'LandingController@personal_family');
Route::get('/personal_travel', 'LandingController@personal_travel');
Route::get('/personal_accident', 'LandingController@personal_accident');

Route::get('/commercial_motor', 'LandingController@commercial_motor');
Route::get('/commercial_flood', 'LandingController@commercial_flood');
Route::get('/commercial_fire', 'LandingController@commercial_fire');
Route::get('/commercial_accident', 'LandingController@commercial_accident');

Route::get('/contacts', 'LandingController@contacts');

// Auth::routes();
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/clients', 'ClientController');
Route::resource('/companies', 'CompanyController');

Route::resource('clients.motors', 'MotorController');
Route::resource('clients.plots', 'PlotController');
Route::resource('companies.workers', 'WorkerController');

Route::resource('clients.motors.insurance', 'InsuranceController');
Route::resource('clients.plots.plotinsurance', 'PlotinsuranceController');
Route::resource('companies.workers.workerinsurance', 'WorkerInsuranceController');
