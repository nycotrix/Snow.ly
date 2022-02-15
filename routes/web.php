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

//Replace with your own domain!
Route::domain(config('snowly.admin.domain'))->group(function()
{
    Route::get('/', 'AdminPageController@index');
    Route::post('/signin', 'AdminPageController@signin');
    Route::post('/about/update', 'AdminPageController@updateAbout');
    Route::post('/settings/update', 'AdminPageController@updateSettings');
});

Route::get('blog/', 'PostController@index');
Route::get('blog/sort/{order?}/{by?}/', 'PostController@index');
Route::post('blog', 'PostController@store');
Route::post('blog/{post}/update', 'PostController@update');
Route::post('blog/{post}/delete', 'PostController@destroy');
Route::get('articles/', 'ArticleController@index');
Route::get('articles/sort/{order?}/{by?}/{filter?}', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::post('articles/{article}/update', 'ArticleController@update');
Route::post('articles/{article}/delete', 'ArticleController@destroy');
Route::get('search', 'SearchController@filter');
Route::get('projects', 'ProjectController@index');
Route::post('projects/fetch', 'ProjectController@fetch');
Route::post('projects/update', 'ProjectController@update');
Route::post('message', 'MessageController@store');
Route::get('message/{message}/delete', 'MessageController@destroy');
Route::view('/', 'pages/landing');
Route::view('contact', 'pages/contact');
Route::get('about', function()
{
    if(isset($settings->hidden_sections['about']))
        abort(402);

    return view('pages/about');
});
