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
})->name('home_');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/landing', 'LandingController@index');
Route::get('/landing/edit', 'LandingController@edit')->name('landing.edit');
Route::post('/landing/edit', 'LandingController@store')->name('landing.store');



Route::get('/service/i/writing', 'IeltsWritingController@index')->name('service_iw')->middleware('auth');;
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

Route::get('/admin/question_answeare' , 'question_answeareController@index')->name('question_answeare');




// weblog

Route::get('/admin/blog', 'BlogController@post_form')->name('blog_form');
Route::post('/admin/blog/upload-image' , 'UploadController@uploadPostImage')->name('upload_image_post');
Route::post('/admin/blog/new-post', 'BlogController@store')->name('add_post');
Route::get('/admin/blog/list', 'BlogController@index')->name('blog_list');
Route::get('/admin/blog/edit-post/{id}' , 'BlogController@edit')->name('edit_post');
Route::post('/admin/blog/edit-post' , 'BlogController@edit_store')->name('edit_store');
Route::post('/admin/blog/delete-post' ,'BlogController@deletePost')->name('delete-post');




Route::get('/admin/service-price', 'servicePriceController@set_price_form')->name('set_price_for_service');
Route::post('/admin/price_service', 'servicePriceController@edit_price')->name('edit_price');

Route::get('/blog' , 'BlogController@index')->name('blogs');


Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/books' , 'BookController@index')->name('books');

Route::post('hamid/upload' ,'UploadController@store')->name('upload');



// payment

Route::get('/service/pay/{id}', 'PaymentController@pay');
Route::get('/service/payment-result/{id}', 'PaymentController@pay_result');



Route::get('/about-me' , 'AboutMeController@index')->name('about-me');


