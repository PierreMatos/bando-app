<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


// Route::get('/storage/uploads/{path}', [
//     'uses'       => 'FileController@file',
//     'middleware' => ['web', 'auth'],
//     'as' => 'Files',
    
// ]);

// Route::get('/', function () {
//     Route::get('/', [ PostController::class, 'feedPosts'])->name('feedposts');
// })->middleware(['auth']);

Route::middleware(['auth'])->group(function()
    {

        Route::get('/storage/uploads/{path}',  [ FileController::class, 'file'])->name('download');
        Route::get('/', [ PostController::class, 'feedPosts'])->name('feedposts');
        Route::get('/bembonda', [ PostController::class, 'album'])->name('bembonda');

        Route::get('/album/{album}', [ AlbumController::class, 'showAlbum'])->name('album');

        
        Route::get('/sendemail', 'SendEmailController@index');
        Route::post('/sendemail/send', 'SendEmailController@send');

        Route::get('/pedrapao', [ ContactController::class, 'contact'])->name('pedrapao');
        Route::post('/pedrapao', [ ContactController::class, 'contactPost'])->name('contactPost');
        // Route::get('/pedrapao', 'ContactController@contact')->name('contact');
        // Route::post('/contact', 'ContactController@contactPost')->name('contactPost');
        // Route::get('/storage/*');
    });

//     Route::get('storage/music/{file}', [
//         'middleware' => 'auth',
//    ]);

//     Route::get('/storage', [
//         'middleware' => 'auth',
//    ]);

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

















Route::resource('postTypes', App\Http\Controllers\PostTypeController::class);

Route::resource('posts', App\Http\Controllers\PostController::class);

Route::resource('postTypes', App\Http\Controllers\PostTypeController::class);

Route::resource('tracks', App\Http\Controllers\TrackController::class);









Route::resource('guests', App\Http\Controllers\GuestController::class);

Route::resource('albums', App\Http\Controllers\AlbumController::class);