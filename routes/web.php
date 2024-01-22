<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',  [PageController::class, 'welcome']);

Route::get('about', [PageController::class, 'index'])->name('about.index');

Route::get('articles', [ArticleController::class, 'index'])->name('article.index');

Route::get('articles/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('articles', [ArticleController::class, 'store'])->name('article.store');

Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
  ->name('article.edit');

Route::patch('articles/{id}', [ArticleController::class, 'update'])
  ->name('article.update');

Route::delete('articles/{id}', [ArticleController::class, 'destroy'])
  ->name('article.destroy');