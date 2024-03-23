<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashbordController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin',[DashbordController::class, 'index'])->name('admin.index');

// Route::resource('/admin/users', 'App\Http\Controllers\UserController');

Route::get('users/{id}',);
// Route for users
Route::get('/admin/users',[UserController::class, 'index'])->name('users.index');
Route::post('/admin/users',[UserController::class, 'store'])->name('users.store');
Route::delete('/admin/users/{user}',[UserController::class, 'destroy'])->name('users.destroy');
Route::get('/admin/users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
Route::put('/admin/users/{user}/edit',[UserController::class, 'update'])->name('users.update');


// Route for posts
Route::get('/admin/posts',[PostController::class, 'index'])->name('posts.index');
Route::get('/admin/posts/create',[PostController::class, 'create'])->name('posts.create');
Route::post('/admin/posts',[PostController::class, 'store'])->name('posts.store');
Route::delete('/admin/posts/{post}',[PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/admin/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
Route::put('/admin/posts/{post}/edit',[PostController::class, 'update'])->name('posts.update');



//Route for category
Route::get('/admin/categories',[CategoryController::class, 'index'])->name('categories.index');
Route::post('/admin/categories',[CategoryController::class, 'store'])->name('categories.store');
Route::delete('/admin/categories/{category}',[CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/admin/categories/{category}/edit',[CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{category}/edit',[CategoryController::class, 'update'])->name('categories.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
