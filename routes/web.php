<?php

//$stripe = App::make('App\Billing\Stripe');
//$stripe = resolve('App\Billing\Stripe');
//$stripe = app('App\Billing\Stripe');

Route::get('/','PostController@index')->name('home');
Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}','PostController@show');
Route::post('/posts','PostController@store');

Route::post('/posts/{post}/comments','CommentController@store');


Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create')->name('login');
Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');


/* POST Routes**/
/**
GET /posts
GET /posts/create
 * POST /posts
 * GET  /posts/{id}/edit
 * GET /posts/{id}
 * PATCH /posts/{id}
 * DELETE  /posts/{id}
 */



