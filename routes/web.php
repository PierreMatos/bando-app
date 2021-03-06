<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\CriaturaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;

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


// Artisan::call('down');
Auth::routes();

//Only logged users can download assets 
Route::get('/assets/{cat}/{filename}', [ FileController::class, 'file'])->name('get.file')->middleware(['auth']);

Route::middleware(['auth'])->group(function()
    {

        Route::get('/', [ PostController::class, 'feedPosts'])->name('feedposts');
        Route::get('/bembonda', [ PostController::class, 'album'])->name('bembonda');

        Route::get('/album/{slug}', [ AlbumController::class, 'showAlbum'])->name('album');
        Route::get('/letra/{slug}', [ TrackController::class, 'showTrackWithRelated'])->name('letra');
        Route::get('/criatura/{slug}', [ CriaturaController::class, 'showCriatura'])->name('criatura');

        
        Route::get('/sendemail', 'SendEmailController@index');
        Route::post('/sendemail/send', 'SendEmailController@send');

        Route::get("/concerto", function(){
            return view('concerto');
         });
         
         Route::get("/esgotou", function(){
            return view('esgotou');
         });

         Route::get('/concerto/{id}', [ ContactController::class, 'concerto'])->name('concerto');
        Route::get('/pedrapao', [ ContactController::class, 'contact'])->name('pedrapao');
        Route::post('/pedrapao', [ ContactController::class, 'contactPost'])->name('contactPost');
        Route::post('/concerto', [ ContactController::class, 'concertoPost'])->name('concertoPost');


        Route::resource('postTypes', App\Http\Controllers\PostTypeController::class);

        Route::resource('posts', App\Http\Controllers\PostController::class);

        Route::resource('postTypes', App\Http\Controllers\PostTypeController::class);

        Route::resource('tracks', App\Http\Controllers\TrackController::class);

        Route::resource('guests', App\Http\Controllers\GuestController::class);

        Route::resource('albums', App\Http\Controllers\AlbumController::class);

        Route::resource('users', App\Http\Controllers\UserController::class);
        Route::post('/profile', [ UserController::class, 'update_avatar'])->name('profile');

        Route::get('/clear-cache', function() {
            $exitCode = Artisan::call('cache:clear');
            // return what you want
        });
        //Reoptimized class loader :
        Route::get('/optimize', function() {
            $exitCode = Artisan::call('optimize');
            return '<h1>Reoptimized class loader</h1>';
        });
        //Route cache:
        Route::get('/route-cache', function() {
            $exitCode = Artisan::call('route:cache');
            return '<h1>Routes cached</h1>';
        });

        //Clear Route cache:
        Route::get('/route-clear', function() {
            $exitCode = Artisan::call('route:clear');
            return '<h1>Route cache cleared</h1>';
        });

        //Clear View cache:
        Route::get('/view-clear', function() {
            $exitCode = Artisan::call('view:clear');
            return '<h1>View cache cleared</h1>';
        });

        //Clear Config cache:
        Route::get('/config-cache', function() {
            $exitCode = Artisan::call('config:cache');
            return '<h1>Clear Config cleared</h1>';
        });

        // Route::get('/updateapp', function()
        // {
        //     Artisan::call('dump-autoload');
        //     echo 'dump-autoload complete';
        // });

    });


Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


// Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

// Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

// Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

// Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

// Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

// Route::post(
//     'generator_builder/generate-from-file',
//     '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
// )->name('io_generator_builder_generate_from_file');

