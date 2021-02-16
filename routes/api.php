<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('pages', 'PagesController', array('only' => array('index', 'store', 'show', 'update', 'destroy')));
    Route::resource('posts', 'API/PostAPIController');
});

Route::resource('post_types', App\Http\Controllers\API\PostTypeAPIController::class);

Route::resource('posts', App\Http\Controllers\API\PostAPIController::class);
Route::get('posts', 'PostAPIController@index')->name('posts_api');

Route::resource('tracks', App\Http\Controllers\API\TrackAPIController::class);









Route::resource('guests', App\Http\Controllers\API\GuestAPIController::class);







Route::resource('albums', App\Http\Controllers\API\AlbumAPIController::class);