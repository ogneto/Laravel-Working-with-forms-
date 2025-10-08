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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('student_registration', 'StudentController@FormGet')->name('form');
Route::post('student_registration', 'StudentController@FormPost')->name('form');

Route::get('/', 'MainController@MainPage')->name('main');

Route::get('/address_registration', 'AddressController@FormGet')->name('form_address');
Route::post('/address_registration', 'AddressController@FormPost')->name('form_address');