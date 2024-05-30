<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', [ArticleController::class, 'index']);

// Cette ligne définit toutes les routes nécessaires pour les articles (index, create, store, show, edit, update, destroy)
Route::resource('articles', ArticleController::class);
Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::get('article.show', [ArticleController::class, 'show']);
Route::get('article.edit', [ArticleController::class, 'edit']);
Route::get('create/store', [ArticleController::class, 'store']);
