<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\foundController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\searchControllerMobile;

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

/* Submission */  Route::post('submit/file',[foundController::class, 'submit']);
/*Save Search data */  Route::post('search/item',[searchController::class, 'searchdetail']);
/*Fetching all posts*/  Route::get('fetch/posts',[foundController::class, 'retrieve']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
