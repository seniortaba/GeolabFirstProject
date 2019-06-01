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

Route::get('/F', 'FirstTable@index'); // es ari igive rac index.php
Route::get('/gverdi', 'secondTable@index'); // es ari meore gverdi rame sxva

Route::get('/', 'IndexController@index');
Route::post('/',[
    'uses' => 'IndexController@index',
    'as' => 'contact.store'
]);
//Route::get('/admin', 'AdminController@login');
Route::match(['get', 'post'], '/admin', 'AdminController@login');
Route::get('admin/dashboard', 'AdminController@dashboard');
Route::get('/logout', 'AdminController@logout');

Route::get('/login', 'admin_login_table@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/dashboar','AminController@dashboard');

//contact validation
Route::get('/contact',[
   'uses' => 'ContactMessageController@create'
]);
Route::post('/contact',[
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store'
]);
Route::get('/slider',[
    'uses' => 'SliderController@index'
]);

//admin banner route
//Route::match(['get', 'post'], '/admin/add-banner', 'BannerController@addBanner');