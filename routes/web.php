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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/construction', function () {
    return view('construction');
});
Route::get('/realestate', function () {
    return view('realestate');
});
Route::get('/manufacturing', function () {
    return view('manufacturing');
});
Route::get('/logistics', function () {
    return view('logistics');
});
Route::get('/ship-building', function () {
    return view('ship_building');
});
Route::get('/e-commerce', function () {
    return view('e_commerce');
});
Route::get('/mining', function () {
    return view('mining');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
