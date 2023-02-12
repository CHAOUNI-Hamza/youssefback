<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StatuController;
use App\Http\Controllers\TaskController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group([

    'middleware' => 'api',
    'prefix' => 'v1/auth'

], function ($router) {

    Route::post('login',[ AuthController::class, 'login' ])->name('login');
    Route::post('logout',[ AuthController::class, 'logout' ])->name('logout');
    Route::post('refresh',[ AuthController::class, 'refresh' ])->name('refresh');
    Route::post('me',[ AuthController::class, 'me' ])->name('me');
    Route::post('store',[ AuthController::class, 'store' ])->name('store');

});


Route::group([

    'middleware' => 'api',
    'prefix' => 'v1/projet'

], function ($router) {

    Route::get('index',[ ProjectController::class, 'index' ])->name('login');
    Route::post('store',[ ProjectController::class, 'store' ])->name('logout');
    Route::get('edit/{id}',[ ProjectController::class, 'edit' ])->name('refresh');
    Route::post('update/{id}',[ ProjectController::class, 'update' ])->name('me');
    Route::delete('destroy/{id}',[ ProjectController::class, 'destroy' ])->name('store');
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'v1/statu'

], function ($router) {

    Route::get('index',[ StatuController::class, 'index' ])->name('login');
    Route::post('store',[ StatuController::class, 'store' ])->name('logout');
    Route::get('edit/{id}',[ StatuController::class, 'edit' ])->name('refresh');
    Route::post('update/{id}',[ StatuController::class, 'update' ])->name('me');
    Route::delete('destroy/{id}',[ StatuController::class, 'destroy' ])->name('store');
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'v1/task'

], function ($router) {

    Route::get('index',[ TaskController::class, 'index' ])->name('login');
    Route::post('store',[ TaskController::class, 'store' ])->name('logout');
    Route::get('edit/{id}',[ TaskController::class, 'edit' ])->name('refresh');
    Route::post('update/{id}',[ TaskController::class, 'update' ])->name('me');
    Route::delete('destroy/{id}',[ TaskController::class, 'destroy' ])->name('store');
});

