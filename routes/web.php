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
    return view('index-demo');
});

Route::get('/login', function () {
    return view('signin');
})->name('login');

Route::get('{type}/signup', function () {
    return view('signup');
})->name('signup');





Route::get('/ui-dev', function () {
    return view('ui-dev');
});