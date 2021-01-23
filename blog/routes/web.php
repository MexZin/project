<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/pl', function () {
    return view(view:'pl');
});
Route::get('/laliga', function () {
    return view(view:'laliga');
});
Route::get('/seria', function () {
    return view(view:'seria');
});
Route::get('/bundesliga', function () {
    return view(view:'bundesliga');
});
Route::get('/lig1', function () {
    return view(view:'lig1');
});
Route::get('/new', function () {
    return view(view:'new');
});
Route::post('/new/submit', 'postcontroller@newpost')->name('post-form');


