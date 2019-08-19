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

Route::get('/', 'MainPageController@index');

// Route::get('/login', function() {
//     return view('login');
// });

Route::get('/confirmation-of-registration', function () {
    return view('confirmationOfRegistration');
});

Route::get('/user/1', function () {
    return view('user');
});

Route::get('/message-to/1', function () {
    return view('messageTo');
});

Route::get('/messages/1/1', function () {
    return view('messageList');
});

Route::get('/message-from/1', function () {
    return view('messageFrom');
});

Route::get('/article/create', 'ArticleController@create')->middleware('auth');
Route::post('/article',  'ArticleController@store') ->middleware('auth');
Route::get('/article/{article}', 'ArticleController@show');

Route::get('/article/1/edit', function () {
    return view('editArticle');
});

Route::get('/feed/1', function () {
    return view('feed');
});

Route::get('/feed/users', function () {
    return view('feedUsers');
});

Route::get('/article/1', function () {
    return view('article');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/info', function () {
    return view('info');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
