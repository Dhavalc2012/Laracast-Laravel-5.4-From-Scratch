<?php


Route::get('/','PostController@index');
Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}','PostController@show');
Route::post('/posts','PostController@store');


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



