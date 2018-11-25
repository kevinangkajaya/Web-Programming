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
    return redirect('/cloth');
});

Route::get('/cloth', 'ClothController@redirect');
Route::get('/insertCloth', 'ClothController@insert');
Route::post('/insertNewCloth', 'ClothController@insertNew');
Route::get('/updateCloth/{id}', 'ClothController@redirectUpdate');
Route::post('/updateCurrentCloth/{id}', 'ClothController@updateCurrent');
Route::get('/removeCloth/{id}', 'ClothController@remove');

Route::get('/category', 'CategoryController@redirect');
Route::get('/insertCategory', 'CategoryController@insert');
Route::post('/insertNewCategory', 'CategoryController@insertNew');
Route::get('/updateCategory/{id}', 'CategoryController@redirectUpdate');
Route::post('/updateCurrentCategory/{id}', 'CategoryController@updateCurrent');
Route::get('/removeCategory/{id}', 'CategoryController@remove');

Route::get('/promo', 'PromoController@redirect');
Route::get('/insertPromo', 'PromoController@insert');
Route::post('/insertNewPromo', 'PromoController@insertNew');
Route::get('/updatePromo/{id}', 'PromoController@redirectUpdate');
Route::post('/updateCurrentPromo/{id}', 'PromoController@updateCurrent');
Route::get('/removePromo/{id}', 'PromoController@remove');
