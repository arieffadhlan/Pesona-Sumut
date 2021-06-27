<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KursiController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/contact', [ContactController::class, 'store']);

Route::get('search', [SearchController::class, 'post'])->name('search.posts');

Route::prefix('posts')->middleware('auth')->group(function () {
     Route::get('create', [PostController::class, 'create'])->name('posts.create');
     Route::post('store', [PostController::class, 'store'])->name('posts.store');
     Route::get('{post:slug}/edit', [PostController::class, 'edit']);
     Route::patch('{post:slug}/edit', [PostController::class, 'update']);
     Route::delete('{post:slug}/delete', [PostController::class, 'destroy']);
});

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('tags/{tag:slug}', [TagController::class, 'show'])->name('tags.show');

Route::get('/kursi', function () {
     return view('booking/kursi');
});
 
Route::post('/kursis/store', [KursiController::class, 'store']);