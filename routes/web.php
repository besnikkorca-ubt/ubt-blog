<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index']);

Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::post('/blog/{post:slug}/comments', [CommentController::class, 'store']);
