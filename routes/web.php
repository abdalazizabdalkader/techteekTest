<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/article/create', [ArticleController::class,'create'])->name('articles.create');
    Route::post('/admin/article/create', [ArticleController::class,'store'])->name('articles.store');
    Route::get('/admin/article/edit/{article}', [ArticleController::class,'edit'])->name('articles.edit');
    Route::post('/admin/article/update', [ArticleController::class,'update'])->name('articles.update');
    Route::delete('/admin/article/destroy/{article}', [ArticleController::class,'destroy'])->name('articles.destroy');
});
Route::get('/article/{slug}', [ArticleController::class,'show'])->name('articles.show');
Route::get('/article', [ArticleController::class,'index'])->name('articles.index');
