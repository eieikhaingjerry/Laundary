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

Route::resource('banks','BankController');
Route::resource('abouts','AboutController');
Route::resource('contacts','ContactController');
Route::resource('customers','CustomerController');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('vouchers','VoucherController');
    Route::resource('checkouts','CheckoutController');
    Route::resource('items','ItemController');
});


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
