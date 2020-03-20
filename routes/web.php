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
    return view('welcome');
});

/**
// Route passing name parameter to template.
Route::get('hello', function () {
    $name = request('name');
    return view('hello',[
       'name' => $name,
    ]);
});

// Route passing wildcard to template.
Route::get('hello/{wildcard}', function ($wildcard) {
    return view('hello',[
        'name' => $wildcard,
    ]);
});
**/

// Routing a Controller
Route::get('hello', 'HelloController@helloGet');
Route::get('hello/{wildcard}', 'HelloController@helloWildcard');


Route::get('assignments', 'AssignmentController@index')->name('assignments.index');
Route::post('assignments', 'AssignmentController@store');
Route::get('assignments/create', 'AssignmentController@create')->name('assignments.create');
Route::get('assignments/{assignment}', 'AssignmentController@show')->name('assignments.show');
Route::get('assignments/{assignment}/edit', 'AssignmentController@edit')->name('assignments.edit');
Route::put('assignments/{assignment}', 'AssignmentController@update');

