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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
    Route::resource('customers', 'CustomersController');
	Route::resource('parts', 'PartsController');
	Route::resource('processes', 'ProcessesController');
    Route::resource('workorders', 'WorkordersController');
    Route::resource('dmrs', 'DmrController');
    Route::resource('workorderHistories', 'WorkorderHistoryController');
    Route::resource('correctiveActions', 'CorrectiveActionController');
});







