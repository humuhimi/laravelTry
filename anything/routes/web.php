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
 use App\Task;


// Route::get('/tasks','TasksController@index');

// Route::get('/tasks/{task}','TasksController@show');

Route::get('/posts','PostsController@index')->name('home');

Route::get('/posts/1','PostsController@show');
// 上のルートと下のルートで何かしらのバグがあるから　確認すること ルータでintを指定してあげるのがいいかも

Route::get('/posts/create','PostsController@create');

Route::post('/posts','PostsController@store');

Route::post('/posts/{post}/comments','CommentsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');

Route::get('/login','SessionController@create');

Route::get('/logout','SessionController@destory');





