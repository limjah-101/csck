<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


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
