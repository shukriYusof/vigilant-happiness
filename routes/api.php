<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;

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

Route::middleware('api')->group(function () {
    Route::get('genre', [ MovieController::class, 'genre'])->name('genre');
    Route::get('timeslot', [ MovieController::class, 'timeslot'])->name('timeslot');
    Route::get('specific_movie_theater', [ MovieController::class, 'place'])->name('place');
    Route::get('performer', [ MovieController::class, 'performer'])->name('performer');
    Route::get('new', [ MovieController::class, 'new'])->name('new');
    Route::post('rating', [ MovieController::class, 'rating'])->name('rating');
    Route::post('add_movie', [ MovieController::class, 'store'])->name('store');
});


