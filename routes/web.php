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
    return view('welcome');
});

Auth::routes();

/*//////////////////////////////////////////////////////
//////////////////////////////////////////////////////*/

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('movie', 'MovieController');
Route::get('movie/destroy/{id}', ['as'=>'movie/destroy','uses' => 'MovieController@destroy']);
Route::post('movie/show', ['as'=>'movie/show','uses' => 'MovieController@show']);
Route::post('movie/update/{id}', ['as'=>'movie/update','uses' => 'MovieController@update']);

/*//////////////////////////////////////////////////////
//////////////////////////////////////////////////////*/

Route::resource('roles', 'RolesController');
Route::get('roles/destroy/{id}', ['as'=>'roles/destroy','uses' => 'RolesController@destroy']);
Route::post('roles/show', ['as'=>'roles/show','uses' => 'RolesController@show']);
Route::post('roles/update/{id}', ['as'=>'roles/update','uses' => 'RolesController@update']);

/*//////////////////////////////////////////////////////
//////////////////////////////////////////////////////*/

Route::resource('categories', 'CategoriesController');
Route::get('categories/destroy/{id}', ['as'=>'categories/destroy','uses' => 'CategoriesController@destroy']);
Route::post('categories/show', ['as'=>'categories/show','uses' => 'CategoriesController@show']);
Route::post('categories/update/{id}', ['as'=>'categories/update','uses' => 'CategoriesController@update']);

/*//////////////////////////////////////////////////////
//////////////////////////////////////////////////////*/

Route::resource('statuses', 'StatusesController');
Route::get('statuses/destroy/{id}', ['as'=>'statuses/destroy','uses' => 'StatusesController@destroy']);
Route::post('statuses/show', ['as'=>'statuses/show','uses' => 'StatusesController@show']);
Route::post('statuses/update/{id}', ['as'=>'statuses/update','uses' => 'StatusesController@update']);

/*//////////////////////////////////////////////////////
//////////////////////////////////////////////////////*/

Route::resource('rentals', 'RentalsController');
Route::get('rentals/destroy/{id}', ['as'=>'rentals/destroy','uses' => 'RentalsController@destroy']);
Route::post('rentals/show', ['as'=>'rentals/show','uses' => 'RentalsController@show']);
Route::post('rentals/update/{id}', ['as'=>'rentals/update','uses' => 'RentalsController@update']);

/*//////////////////////////////////////////////////////
//////////////////////////////////////////////////////*/

Route::resource('type_statuses', 'T_StatusesController');
Route::get('type_statuses/destroy/{id}', ['as'=>'type_statuses/destroy','uses' => 'T_StatusesController@destroy']);
Route::post('type_statuses/show', ['as'=>'type_statuses/show','uses' => 'T_StatusesController@show']);
Route::post('type_statuses/update/{id}', ['as'=>'type_statuses/update','uses' => 'T_StatusesController@update']);


/*//////////////////////////////////////////////////////
//////////////////////////////////////////////////////*/

Route::resource('user', 'UserController');
Route::get('user/destroy/{id}', ['as'=>'user/destroy','uses' => 'UserController@destroy']);
Route::post('user/show', ['as'=>'user/show','uses' => 'UserController@show']);
Route::post('user/update/{id}', ['as'=>'user/update','uses' => 'UserController@update']);
	