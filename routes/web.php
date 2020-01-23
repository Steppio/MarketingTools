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

Route::match(array('GET', 'POST'), '/sites/create', 'SiteController@create');

// Sites
Route::get( '/sites', 'SiteController@list' );
Route::match(array('GET', 'POST'), '/sites/edit/{id}', 'SiteController@update' );
Route::get( '/sites/view/{id}', 'SiteController@view' );
Route::get( '/sites/destroy/{id}', 'SiteController@destroy' );

// Checklist
Route::get( '/checklist', 'ChecklistController@list' );
Route::get( '/checklist/view/{id}', 'ChecklistController@view' );
Route::get( '/checklist/destroy/{id}', 'ChecklistController@destroy' );
Route::match(array('GET', 'POST'), '/checklist/edit/{id}', 'ChecklistController@update' );
Route::match(array('GET', 'POST'), '/checklist/create', 'ChecklistController@create' );

// Privacy
Route::get( '/privacy', 'PrivacyController@list' );
Route::get( '/privacy/destroy/{id}', 'PrivacyController@destroy' );
Route::get( '/privacy/view/{id}', 'PrivacyController@view' );
Route::match(array('GET', 'POST'), '/privacy/edit/{id}', 'PrivacyController@update' );
Route::match(array('GET', 'POST'), '/privacy/create', 'PrivacyController@create' );

// Terms
Route::get( '/terms', 'TermsController@list' );
Route::get( '/terms/view/{id}', 'TermsController@view' );
Route::get( '/terms/destroy/{id}', 'TermsController@destroy' );
Route::match(array('GET', 'POST'), '/terms/edit/{id}', 'TermsController@update' );
Route::match(array('GET', 'POST'), '/terms/create', 'TermsController@create' );

// Auth0
Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );

Route::get( '/login', 'Auth\Auth0IndexController@login' )->name( 'login' );
Route::get( '/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' )->middleware('auth');