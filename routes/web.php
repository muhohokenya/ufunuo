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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/company', 'WelcomeController@company')->name('company');
Route::get('/faq', 'WelcomeController@faq')->name('faq');
Route::get('/projects', 'WelcomeController@projects')->name('projects');
Route::get('/services', 'WelcomeController@services')->name('services');
Route::get('/real_estate', 'WelcomeController@real_estate')->name('real_estate');
Route::get('/hardware', 'WelcomeController@hardware')->name('hardware');
Route::get('/contact', 'WelcomeController@contact')->name('contact');
