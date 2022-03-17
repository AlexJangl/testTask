<?php

use App\Http\Controllers\ApiMovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

require ('_admin.php');

Route::resource('/movies', MovieController::class);
Route::resource('/genre', GenreController::class);

Route::group([
    'prefix' => 'api',
    'as' => 'api.'
], function () {
    Route::apiResource('/movies', ApiMovieController::class)->only('index', 'show');
    Route::apiResource('/genre', ApiGenreController::class)->only('index', 'show');

});

Route::get('clear',function (){
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return 'cleared';
});
