<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

 Route::get('/',[PublicController::class,'home'])->name('home');

 //article route

 //create
 Route::get('/articles/create',[ArticleController::class,'create'])->name('articles.create');
 Route::post('/articles',[ArticleController::class,'store'])->name('articles.store');
 
 //update
 Route::get('/articles/{article}/edit',[ArticleController::class,'edit'])->name('articles.edit');
 Route::put('/articles/{article}/update',[ArticleController::class,'update'])->name('articles.update');

 //delete
 Route::get('/articles/{article}',[ArticleController::class,'destroy'])->name('articles.destroy');

 //read
 Route::get('/articles',[ArticleController::class,'index'])->name('articles.index');
 Route::get('/articles/{article}',[ArticleController::class,'show'])->name('articles.show');