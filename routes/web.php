<?php
//id generator

// use within single line code


// output: 160001

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

//blog
Route::get('/','WelcomeController@welcome')->name('welcome');
Route::get('/contact', 'WelcomeController@contact')->name('contact');

//user account use
Route::middleware(['auth'])->group(function(){
Route::get('/home', 'WelcomeController@frontendindex')->name('home');
//create order for user
Route::get('/users/{user}/categories/{category}','OrderController@create')->name('orders.category');
//apres effectue une commande
Route::get('/Commande_effectue', function () {
    return view('frontend.orders.insta');
})->name('commande_eff');
Route::get('/users/{user}/commandes','dash\OrderController@show')->name('commandes');

Route::resource('users.orders','OrderController');
Route::resource('orders','dash\OrderController');

});

Auth::routes();

//admin account use
Route::prefix('admin')->middleware(['auth', 'admin'])->group (function(){
Route::get('/welcomeA', 'WelcomeController@welcomeA')->name('welcomeA');
Route::resource('categories','CategoryController');
Route::resource('cards','CardController');
Route::resource('offres','OffreController');
Route::resource('users','UserController');
});



