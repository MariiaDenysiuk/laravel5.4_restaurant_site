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

Route::group(['prefix'=>'adminzone'], function()
{
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::resource('articles', 'ArticlesController');
    Route::resource('pages', 'PagesController');
    Route::resource('categories', 'CategoriesController');
});

//Route::get('/', function()
//{
//    return "Заглушка для галавной страницы";
//});

Route::get('/', 'FrontController@index');

Route::get('/reservation', 'FrontController@reservation');
Route::get('/about', 'FrontController@about');
Route::get('/contacts', 'FrontController@contacts');
Route::get('/gallery', 'FrontController@gallery');

Route::get('/blog', 'FrontController@blog');
Route::get('blog/show/{id}','FrontController@show');