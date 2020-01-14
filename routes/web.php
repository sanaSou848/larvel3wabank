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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/test', function () {
    return "test reussi";
});*/

Route::get('/','PagesController@welcome')->name('welcome');



Route::get('/about','PagesController@about')->name('about');


Route::get('/services','PagesController@services')->name('services');
Route::get('/contact','PagesController@contact')->name('contact');
Route::post('/contact','PagesController@contactMessage')->name('contactMessage');


//Route::resource('client','ClientController')->middleware('auth');
Route::resource('client','ClientController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
