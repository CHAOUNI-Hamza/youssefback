<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    Route::get('edit',[ ProjectController::class, 'edit' ])->name('refresh');
    Route::post('update',[ ProjectController::class, 'update' ])->name('me');
    Route::post('destroy',[ ProjectController::class, 'destroy' ])->name('store');

});

