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

// Pages
Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/contact/create', 'PageController@contact')->name('contact.create');
Route::post('/contact', 'PageController@store');
Route::get('/thankyou', 'PageController@thankyou');



// Property
Route::post('properties/{property}/contact', 'PageController@store');
Route::resource('properties', 'PropertyController');
// Post
Route::resource('posts', 'PostController');
