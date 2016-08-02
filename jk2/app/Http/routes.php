<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');*/
/*Route::get('/jk-admin', 'AdminController@login');
Route::post('/login', 'AdminController@login');*/

Route::get('/', 'HomeController@index');
$this->get('logout', 'Auth\AuthController@logout');

Route::group(['namespace' => 'admin', 'prefix'=> 'admin','as' => 'admin.'], function() {
    Route::get('/jk-admin', [ 'as' =>'jk-admin', 'uses' => 'AdminController@login']);
    Route::post('/jk-admin', [ 'as' =>'jk-admin', 'uses' => 'AdminController@login']);
    Route::get('/dashboard', [ 'as' =>'dashboard', 'middleware' => 'auth','uses' => 'AdminController@index']);
    Route::get('/members', [ 'as' =>'members', 'middleware' => 'auth','uses' => 'AdminController@memberLists']);
    Route::get('/add-members', [ 'as' =>'add-members', 'middleware' => 'auth','uses' => 'AdminController@addMembers']);
    Route::post('/add-members', [ 'as' =>'add-members', 'middleware' => 'auth','uses' => 'AdminController@addMembers']);
    Route::get('/events', [ 'as' =>'events', 'middleware' => 'auth','uses' => 'AdminController@eventLists']);
    Route::get('/add-events', [ 'as' =>'add-events', 'middleware' => 'auth','uses' => 'AdminController@addEvents']);
    Route::get('/gallery', [ 'as' =>'gallery', 'middleware' => 'auth','uses' => 'AdminController@galleryLists']);
    Route::get('/add-images', [ 'as' =>'add-images', 'middleware' => 'auth','uses' => 'AdminController@addImages']);
    Route::get('/blogs', [ 'as' =>'blogs', 'middleware' => 'auth','uses' => 'AdminController@blogLists']);
    Route::get('/add-blogs', [ 'as' =>'add-blogs', 'middleware' => 'auth','uses' => 'AdminController@addBlogs' ]);
    Route::get('/news', [ 'as' =>'news', 'middleware' => 'auth','uses' => 'AdminController@newsLists']);
    Route::get('/add-news', [ 'as' =>'add-news', 'middleware' => 'auth','uses' => 'AdminController@addNews' ]);
    Route::get('/about-us', [ 'as' =>'about-us', 'middleware' => 'auth','uses' => 'AdminController@cms']);
});
