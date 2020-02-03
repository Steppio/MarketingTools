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


// Route::get('/sites/{site?}', 'Site@index');

Route::match(array('GET', 'POST'), '/sites/create', ['middleware' => 'auth', 'uses' => 'SiteController@create']);

// Sites
Route::get( '/sites', ['middleware' => 'auth', 'uses' => 'SiteController@list'] );
Route::match(array('GET', 'POST'), '/sites/edit/{id}', ['middleware' => 'auth', 'uses' => 'SiteController@update'] );
Route::get( '/sites/view/{id}', ['middleware' => 'auth', 'uses' => 'SiteController@view'] );
Route::get( '/sites/destroy/{id}', ['middleware' => 'auth', 'uses' => 'SiteController@destroy'] );

// Checklist
Route::get( '/checklist', ['middleware' => 'auth', 'uses' => 'ChecklistController@list'] );
Route::get( '/checklist/view/{id}', ['middleware' => 'auth', 'uses' => 'ChecklistController@view'] );
Route::get( '/checklist/destroy/{id}', ['middleware' => 'auth', 'uses' => 'ChecklistController@destroy'] );
Route::match(array('GET', 'POST'), '/checklist/edit/{id}', ['middleware' => 'auth', 'uses' => 'ChecklistController@update'] );
Route::match(array('GET', 'POST'), '/checklist/create', ['middleware' => 'auth', 'uses' => 'ChecklistController@create'] );

// Privacy
Route::get( '/privacy', ['middleware' => 'auth', 'uses' => 'PrivacyController@list'] );
Route::get( '/privacy/destroy/{id}', ['middleware' => 'auth', 'uses' => 'PrivacyController@destroy'] );
Route::get( '/privacy/view/{id}', ['middleware' => 'auth', 'uses' => 'PrivacyController@view'] );
Route::match(array('GET', 'POST'), '/privacy/edit/{id}', ['middleware' => 'auth', 'uses' => 'PrivacyController@update'] );
Route::match(array('GET', 'POST'), '/privacy/create', ['middleware' => 'auth', 'uses' => 'PrivacyController@create'] );

// Terms
Route::get( '/terms', ['middleware' => 'auth', 'uses' => 'TermsController@list'] );
Route::get( '/terms/view/{id}', ['middleware' => 'auth', 'uses' => 'TermsController@view'] );
Route::get( '/terms/destroy/{id}', ['middleware' => 'auth', 'uses' => 'TermsController@destroy'] );
Route::match(array('GET', 'POST'), '/terms/edit/{id}', ['middleware' => 'auth', 'uses' => 'TermsController@update'] );
Route::match(array('GET', 'POST'), '/terms/create', ['middleware' => 'auth', 'uses' => 'TermsController@create']  );

// Auth0
Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );

Route::get( '/login', 'Auth\Auth0IndexController@login' )->name( 'login' );
Route::get( '/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' )->middleware('auth');