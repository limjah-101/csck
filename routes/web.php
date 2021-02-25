<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


/**
|--------------- BACKEND ROUTES -------------
| All back-End routes
|-------------------------------------------
 */
Route::group(['prefix' => '/admin'], function () {
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    
    /**
    | Pages routes
     */
    Route::get('/pages', 'PageController@all')->name('page.all');
    Route::match(['get', 'post'], '/pages/create', 'PageController@store')->name('page.create');
    Route::get('/show/{page}', 'PageController@show')->name('page.show');
    Route::match(['get', 'put'], '/edit/{page}', 'PageController@edit')->name('page.edit');
    Route::get('/delete/{page}', 'PageController@delete')->name('page.delete');    
    Route::get('/active/{page}', 'PageController@toggleActive')->name('page.toggleActive');

    /**
    | Articles routes
     */
    Route::post('/article/create', 'ArticleController@store')->name('article.create');    
    Route::get('/article/create/{page_id}', 'ArticleController@show')->name('article.show');
    Route::match(['get', 'put'], '/article/edit/{article}', 'ArticleController@edit')->name('article.edit');
    Route::get('/article/delete/{article}', 'ArticleController@delete')->name('article.delete');    
    Route::get('/article/active/{article}', 'ArticleController@toggleActive')->name('article.toggleActive');

    Route::get('/pdf', 'PageController@exportArticles');

     /**
    | Events routes
     */
    Route::get('/event', 'EventController@index')->name('event.all');
    Route::match(['get', 'post'],'/event/create', 'EventController@store')->name('event.create');
    Route::match(['get', 'put'], '/event/edit/{event}', 'EventController@edit')->name('event.edit');
    Route::get('/event/delete/{event}', 'EventController@delete')->name('event.delete');
    Route::get('/event/active/{event}', 'EventController@toggleActive')->name('event.toggleActive');   
  
    
    /**
    | Files routes
     */
    Route::match(['get', 'post'], 'document/upload', 'FileController@uploadDocuments')->name('document.create');
    Route::get('/document', 'FileController@index')->name('document.all');
    Route::get('/documents/{document}', 'FileController@downloadFile')->name('document.download');



});


/**
|--------------- CLIENT ROUTES -------------
| All front-End routes
|-------------------------------------------
 */
Route::get('/', 'Client\SharedController@homePage')->name('home');

/**
 * About Page Routes
 */
Route::get('/le-club/présentation', 'Client\About\AboutController@aboutPresentation')
    ->name('presentation');
Route::get('/le-club/équipe', 'Client\About\AboutController@aboutStaff')
    ->name('staff');

/**
 * Activities Page Routes
 */
Route::get('/activités/nos-préstations', 'Client\Activity\ActivityController@activityLoan')
    ->name('loan');
Route::get('/activités/séance-de-navigation', 'Client\Activity\ActivityController@activityPlanning')
    ->name('planning');
Route::get('/activités/adhérer-au-club', 'Client\Activity\ActivityController@activityJoin')
    ->name('join');

/**
 * News and Dragon_ladies Pages Routes
 */
Route::get('/actualités', 'Client\SharedController@newsUpcoming')
    ->name('news');
Route::get('/dragon-ladies', 'Client\SharedController@dragonLadies'
    )->name('dragon_ladies');

/**
 * Contact Page Routes
 */
Route::match(['get', 'post'], '/nous-contacter', 'Client\ContactController@contactPage')
    ->name('contact');





/**
| Files routes
*/

Route::match(['get', 'post'], 'club/inscription', 'FileController@signUp')->name('club.signup');
