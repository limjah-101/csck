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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
| ============= CLIENT ROUTES ==============
|
 */
Route::get('/client/home', 'ClientController@homePage')->name('home_page');
Route::get('/client/activities', 'ClientController@activities')->name('activities');
Route::get('/client/health', 'ClientController@health')->name('health');
Route::get('/client/partners', 'ClientController@partners')->name('partners');
Route::get('/client/about', 'ClientController@about')->name('about');
Route::get('/client/contact', 'ClientController@contact')->name('contact');
