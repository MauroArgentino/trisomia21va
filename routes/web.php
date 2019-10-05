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

Route::redirect('/', 'home');

Route::group(['namespace' => 'Web'], function() {

	Route::get('home', 'PageController@web')->name('web.home');

	Route::get('post/{slug}', 'PageController@post')->name('web.post');

	Route::get('categoria/{categoria}', 'PageController@categoria')->name('web.categoria');

	Route::get('etiqueta/{tag}', 'PageController@tag')->name('web.tag');

    Route::get('usuario/{user}', 'PageController@user')->name('web.user');

});

Route::group(['namespace' => 'Admin'], function () {

    Route::get('admin/home', 'HomeController@index')->name('admin.home');

    Route::get('admin/post', 'PostsController@index')->name('admin.post.post');

    Route::get('admin/tag', 'TagsController@index')->name('admin.tag.tag');

    Route::get('admin/categoria', 'CategoriasController@index')->name('admin.categoria.categoria');

    // Admin auth Routes

    Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');

    Route::post('admin-login', 'Auth\LoginController@login')->name('admin.login');
    
});

//Auth::routes();