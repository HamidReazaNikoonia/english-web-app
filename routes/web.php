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

// Route::get('/admin/{k}', 'AdminController@index');
Route::get('/admin','AdminController@home');
Route::get('/admin/product/{id}' , 'AdminController@show_product');
Route::post('/admin/upload-result' , 'AdminController@upload_result')->name('update_form_result_file');
Route::post('/admin/send-result' , 'AdminController@send_result')->name('send_result_to_user');
Route::get('/admin/send-sms' , 'AdminController@send_sms')->name('send_sms');

Route::get('/admin/books/index' ,  'BookController@list')->name('books-list');
Route::get('/admin/books/store' , 'BookController@store')->name('books-store-form');
Route::post('/admin/books/store' , 'BookController@save_book')->name('save_book');
Route::get('/admin/books/edit/{id}' , 'BookController@edit_form')->name('edit_form');
Route::post('/admin/books/edit' ,  'BookController@edit')->name('edit_book');
Route::post('/admin/books/delete' ,  'BookController@delete')->name('delete_book');


// weblog

Route::get('/admin/blog', 'BlogController@post_form')->name('blog_form');



Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/books' , 'BookController@index');

Route::post('hamid/upload' ,'UploadController@store')->name('upload');







Route::get('/about-me' , 'AboutMeController@index');


