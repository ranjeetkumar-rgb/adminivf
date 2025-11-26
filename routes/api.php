<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Blog API routes
Route::prefix('blog')->group(function () {
    // Like/Unlike blog
    Route::post('/{id}/like', [App\Http\Controllers\Api\BlogLikeController::class, 'toggleLike']);
    Route::get('/{id}/likes', [App\Http\Controllers\Api\BlogLikeController::class, 'getLikes']);
    
    // Share tracking
    Route::post('/{id}/share', [App\Http\Controllers\Api\BlogShareController::class, 'trackShare']);
    
    // Comments
    Route::post('/{id}/comments', [App\Http\Controllers\Api\BlogCommentController::class, 'store']);
    Route::get('/{id}/comments', [App\Http\Controllers\Api\BlogCommentController::class, 'getComments']);
    Route::post('/comments/{id}/like', [App\Http\Controllers\Api\BlogCommentController::class, 'likeComment']);
    Route::post('/check-user', [App\Http\Controllers\Api\BlogCommentController::class, 'checkUser']);
    Route::post('/login', [App\Http\Controllers\Api\BlogCommentController::class, 'login']);
    Route::post('/register', [App\Http\Controllers\Api\BlogCommentController::class, 'register']);
});
