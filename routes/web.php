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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/service/i/writing', 'IeltsWritingController@index');
Route::post('/service/i/writing','IeltsWritingController@store');

Route::get('/service/i/speaking' , 'IeltsSpeakingController@index');
Route::post('/service/i/speaking' , 'IeltsSpeakingController@store');

Route::get('/service/t/writing', 'TofelWritingController@index');
Route::post('/service/t/writing', 'TofelWritingController@store');

Route::get('/service/t/speaking', 'TofelSpeakingController@index');
Route::post('/service/t/speaking', 'TofelSpeakingController@store');

Route::get('/admin/{k}', 'AdminController@index');
Route::get('/admin','AdminController@home');
Route::get('/admin/product/{id}' , 'AdminController@show_product');



Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::post('hamid/upload' ,'UploadController@store')->name('upload');


Route::get('/blog', 'BlogController@index');

Route::get('/about-me' , 'AboutMeController@index');


