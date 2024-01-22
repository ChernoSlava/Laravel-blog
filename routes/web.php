<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleCommentController;
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

Route::resource('articles', ArticleController::class);
Route::resource('articles.comments', ArticleCommentController::class);