<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users',[UsersController::class, 'index']);
Route::get('/users/{id}', [UsersController::class, 'showUser']);
Route::post('/users',[UsersController::class, 'store']);
Route::put('/users/{id}',[UsersController::class, 'update']);
Route::delete('/users/{id}',[UsersController::class, 'destroy']);
Route::post('/auth/register', [UsersController::class, 'createUser']);
Route::post('/auth/login', [UsersController::class, 'loginUser']);

Route::get('/blogs',[BlogController::class, 'index']);
Route::post('/blogs',[BlogController::class, 'store']);
Route::put('/blogs/{id}',[BlogController::class, 'update']);
Route::get('/user-blogs', [BlogController::class, 'showAll']);
Route::delete('/blogs/{id}',[BlogController::class, 'destroy']);
Route::get('/user-blogs/{id}',[BlogController::class, 'showUserBlogsById']);
Route::get('/blogs/{id}',[BlogController::class, 'showBlogById']);

Route::get('/comments',[CommentsController::class, 'index']);
Route::post('/comments',[CommentsController::class, 'store']);
Route::put('/comments/{id}',[CommentsController::class, 'update']);
Route::get('/blog-comments',[CommentsController::class, 'showAllComments']);
Route::get('/user-comments',[CommentsController::class, 'showAllUserComments']);
Route::get('/user-comments/{id}',[CommentsController::class, 'showUserCommentsById']);
Route::delete('/comments/{id}',[CommentsController::class, 'destroy']);