<?php

use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\ArticleCommentsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index'])->name('home');

Route::get('articles/{article:slug}', [ArticleController::class, 'show']);
Route::post('articles/{article:slug}/comments', [ArticleCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


Route::middleware('can:admin')->group(function () {
    Route::post('admin/articles', [AdminArticleController::class, 'store']);
    Route::get('admin/articles/create', [AdminArticleController::class, 'create']);
    Route::get('admin/articles', [AdminArticleController::class, 'index']);
    Route::get('admin/articles/{article}/edit', [AdminArticleController::class, 'edit']);
    Route::patch('admin/articles/{article}', [AdminArticleController::class, 'update']);
    Route::delete('admin/articles/{article}', [AdminArticleController::class, 'destroy']);
});
