<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\User\UserController;
use App\Http\Controllers\API\Menu\MenuController;
use App\Http\Controllers\API\Beauty\BeautyController;

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

// Authentication
Route::prefix('auth')->name('auth.')->group(function () {
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('auth/logout', [AuthController::class, 'logout'])->name('login');
    Route::get('/user', [UserController::class, 'show']);

    // api for header in figma
    Route::get('/user-diaries', [UserController::class, 'diaries']);
    Route::get('/user-notifications', [UserController::class, 'notifications']);
    Route::get('/user-challenges', [UserController::class, 'challenges']);

    // api for first screen in figma
    Route::get('/user-body', [UserController::class, 'body']);
    Route::get('/menu-types', [MenuController::class, 'showTypes']);
    Route::get('/menu-rand', [MenuController::class, 'menuRand']);

    // api for second screen in figma
    // route user-body
    Route::get('/user-exercises', [UserController::class, 'exercises']);
    // route use-diaries
});

Route::get('/beauty-types', [BeautyController::class, 'showTypes']);
Route::get('/beauty-rand', [BeautyController::class, 'beautyRand']);
