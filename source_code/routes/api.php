<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsCategoryController;
use App\Models\NewsCategory;
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

Route::controller(AuthController::class)->group(function(){
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});


Route::controller(NewsCategoryController::class)->group(function () {
    Route::get('newscategory', 'index');
});

Route::controller(NewsCategoryController::class)->group(function () {
    Route::post('newscategory', 'store');
    Route::get('newscategory/{id}', 'show');
    Route::put('newscategory/{id}', 'update');
    Route::delete('newscategory/{id}', 'destroy');
})->middleware('auth');


Route::group(['middleware' => ['auth:api']], function(){
    Route::post('newscategory', 'NewsCategoryController@store')->name('store');
});
