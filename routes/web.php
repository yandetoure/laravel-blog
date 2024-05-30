<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'index']);

// Cette ligne définit toutes les routes nécessaires pour les articles (index, create, store, show, edit, update, destroy)
Route::resource('articles', ArticleController::class);
Route::get('create', [ArticleController::class, 'create']);

