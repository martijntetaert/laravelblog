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


/*FRONTED*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{slug}',['as'=>'home.post','uses'=>'AdminPostsController@post']);


Auth::routes();


/*backend routes*/

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', 'HomeController@index');
    Route::resource('/admin/users', 'AdminUsersController');
    Route::resource('/admin/posts', 'AdminPostsController');
    Route::resource('/admin/categories', 'AdminCategoriesController');
    Route::resource('/admin/media', 'AdminMediaController');
    Route::resource('/admin/comments', 'PostCommentController');
});

