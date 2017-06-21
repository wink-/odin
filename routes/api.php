<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('dmrs', 'API\DmrAPIController');
Route::resource('parts', 'Api\PartsAPIController');

Route::resource('workorders', 'API\WorkordersAPIController');
Route::resource('workorder_histories', 'API\WorkorderHistoryAPIController');



Route::resource('corrective_actions', 'API\CorrectiveActionAPIController');