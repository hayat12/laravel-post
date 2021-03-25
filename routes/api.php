<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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
Route::get('posts', [PostController::class, 'index']);;
Route::get('post/{id}', [PostController::class, 'show']);;
Route::post('post', [PostController::class, 'store']);;
Route::put('post/{id}', [PostController::class, 'update']);;
Route::delete('post/{id}', [PostController::class, 'destroy']);;


Route::get('comments', [CommentController::class, 'index']);;
Route::get('comment/{id}', [CommentController::class, 'show']);;
Route::post('comment', [CommentController::class, 'store']);;
Route::put('comment/{id}', [CommentController::class, 'update']);;
Route::delete('comment/{id}', [CommentController::class, 'destroy']);;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

