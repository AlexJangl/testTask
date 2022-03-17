<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TranslationAdminController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::group([
//    'middleware' => ['auth'],//,'isAdmin'
    'prefix' => 'adminex',
    'as' => 'admin.'
], function () {
    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
//    Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
    Route::resource('/genre', GenreController::class);
});

