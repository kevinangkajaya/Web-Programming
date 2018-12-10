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

Route::get('/loginPage', 'UserController@loginPage')->middleware(\App\Http\Middleware\guestAuthCheck::class);
Route::post('login','UserController@login')->middleware(\App\Http\Middleware\guestAuthCheck::class);
Route::get('/registerPage', 'UserController@registerPage')->middleware(\App\Http\Middleware\guestAuthCheck::class);
Route::post('register','UserController@register')->middleware(\App\Http\Middleware\guestAuthCheck::class);

Route::get('/cloth', 'ClothController@redirect');
Route::get('/insertCloth', 'ClothController@insert')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::post('/insertNewCloth', 'ClothController@insertNew')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::get('/updateCloth/{id}', 'ClothController@redirectUpdate')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::post('/updateCurrentCloth/{id}', 'ClothController@updateCurrent')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::get('/removeCloth/{id}', 'ClothController@remove')->middleware(\App\Http\Middleware\adminAuthCheck::class);

Route::get('/category', 'CategoryController@redirect')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::get('/insertCategory', 'CategoryController@insert')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::post('/insertNewCategory', 'CategoryController@insertNew')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::get('/updateCategory/{id}', 'CategoryController@redirectUpdate')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::post('/updateCurrentCategory/{id}', 'CategoryController@updateCurrent')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::get('/removeCategory/{id}', 'CategoryController@remove')->middleware(\App\Http\Middleware\adminAuthCheck::class);

Route::get('/promo', 'PromoController@redirect')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::get('/insertPromo', 'PromoController@insert')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::post('/insertNewPromo', 'PromoController@insertNew')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::get('/updatePromo/{id}', 'PromoController@redirectUpdate')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::post('/updateCurrentPromo/{id}', 'PromoController@updateCurrent')->middleware(\App\Http\Middleware\adminAuthCheck::class);
Route::get('/removePromo/{id}', 'PromoController@remove')->middleware(\App\Http\Middleware\adminAuthCheck::class);

// Route::get('/user','');

// Route::get('/profile','');
Route::get('/cart','TransactionController@redirectCart')->middleware(\App\Http\Middleware\memberAuthCheck::class);
Route::get('/addToCart/{id}', 'TransactionController@addToCart')->middleware(\App\Http\Middleware\memberAuthCheck::class);
Route::get('/removeFromCart/{id}', 'TransactionController@removeFromCart')->middleware(\App\Http\Middleware\memberAuthCheck::class);
Route::get('/checkout','TransactionController@checkout')->middleware(\App\Http\Middleware\memberAuthCheck::class);

// Route::get('/transaction','');

Route::get('logout','UserController@logout');