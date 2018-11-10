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

Route::get('/promo', 'PromoController@redirect');
Route::get('/insertPromo', 'PromoController@insert');
Route::post('/insertNewPromo', 'PromoController@insertNew');
Route::get('/updatePromo/{id}', 'PromoController@redirectUpdate');
Route::post('/updateCurrentPromo/{id}', 'PromoController@updateCurrent');
Route::get('/removePromo/{id}', 'PromoController@remove');