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
use App\Http\Middleware;

Route::get('/', function () {
    return redirect('/cloth');
});

Route::get('/loginPage', 'UserController@loginPage')->middleware(Middleware\guestAuthCheck::class);
Route::post('login','UserController@login')->middleware(Middleware\guestAuthCheck::class);
Route::get('/registerPage', 'UserController@registerPage')->middleware(Middleware\guestAuthCheck::class);
Route::post('register','UserController@register')->middleware(Middleware\guestAuthCheck::class);

Route::get('/profile','UserController@profilePage')->middleware(Middleware\memberAuthCheck::class);
Route::get('/updateProfilePage','UserController@updateProfilePage')->middleware(Middleware\memberAuthCheck::class);
Route::post('/updateProfile','UserController@updateProfile')->middleware(Middleware\memberAuthCheck::class);

Route::get('/cart','TransactionController@redirectCart')->middleware(Middleware\memberAuthCheck::class);
Route::get('/addToCart/{id}', 'TransactionController@addToCart')->middleware(Middleware\memberAuthCheck::class);
Route::get('/removeFromCart/{id}', 'TransactionController@removeFromCart')->middleware(Middleware\memberAuthCheck::class);
Route::post('/checkout/{total}','TransactionController@checkout')->middleware(Middleware\memberAuthCheck::class);

Route::get('/cloth', 'ClothController@redirect');
Route::get('/insertCloth', 'ClothController@insert')->middleware(Middleware\adminAuthCheck::class);
Route::post('/insertNewCloth', 'ClothController@insertNew')->middleware(Middleware\adminAuthCheck::class);
Route::get('/updateCloth/{id}', 'ClothController@redirectUpdate')->middleware(Middleware\adminAuthCheck::class);
Route::post('/updateCurrentCloth/{id}', 'ClothController@updateCurrent')->middleware(Middleware\adminAuthCheck::class);
Route::get('/removeCloth/{id}', 'ClothController@remove')->middleware(Middleware\adminAuthCheck::class);

Route::get('/category', 'CategoryController@redirect')->middleware(Middleware\adminAuthCheck::class);
Route::get('/insertCategory', 'CategoryController@insert')->middleware(Middleware\adminAuthCheck::class);
Route::post('/insertNewCategory', 'CategoryController@insertNew')->middleware(Middleware\adminAuthCheck::class);
Route::get('/updateCategory/{id}', 'CategoryController@redirectUpdate')->middleware(Middleware\adminAuthCheck::class);
Route::post('/updateCurrentCategory/{id}', 'CategoryController@updateCurrent')->middleware(Middleware\adminAuthCheck::class);
Route::get('/removeCategory/{id}', 'CategoryController@remove')->middleware(Middleware\adminAuthCheck::class);

Route::get('/promo', 'PromoController@redirect')->middleware(Middleware\adminAuthCheck::class);
Route::get('/insertPromo', 'PromoController@insert')->middleware(Middleware\adminAuthCheck::class);
Route::post('/insertNewPromo', 'PromoController@insertNew')->middleware(Middleware\adminAuthCheck::class);
Route::get('/updatePromo/{id}', 'PromoController@redirectUpdate')->middleware(Middleware\adminAuthCheck::class);
Route::post('/updateCurrentPromo/{id}', 'PromoController@updateCurrent')->middleware(Middleware\adminAuthCheck::class);
Route::get('/removePromo/{id}', 'PromoController@remove')->middleware(Middleware\adminAuthCheck::class);

Route::get('/user', 'UserController@redirect')->middleware(Middleware\adminAuthCheck::class);
Route::get('/updateUser/{id}', 'UserController@redirectUpdate')->middleware(Middleware\adminAuthCheck::class);
Route::post('/updateCurrentUser/{id}', 'UserController@updateCurrent')->middleware(Middleware\adminAuthCheck::class);
Route::get('/removeUser/{id}', 'UserController@remove')->middleware(Middleware\adminAuthCheck::class);

Route::get('/historyPage','TransactionController@historyPage')->middleware(Middleware\adminAuthCheck::class);

Route::get('logout','UserController@logout');