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



//Passing Data With View Examples Snippet/*
/*Route::get('/', function () {
    return view('welcome',[
        'name' => 'World'
    ]);
});*/


/*Route::get('/', function () {
    return view('welcome')->with('name','World');
});*/


Route::get('/', function () {
   $tasks = [
       'Go to the work',
       'Get food from the market',
       'Clean Home'
   ];
    return view('welcome',compact('tasks'));
});

Route::get('about', function () {
    return view('about');
});

