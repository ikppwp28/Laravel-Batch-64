<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\IsAdminn;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/form', [FormController::class, 'form']);
Route::post('/welcome', [FormController::class, 'SignUp']);

Route::get('/master', function() {
    return view('layouts.master');
});

Route::middleware(['auth', IsAdminn::class])->group(function(){
    // Category
    // C -> Create
    Route::get('category/create', [CategoryController::class, 'create']);
    Route::post('/category', [CategoryController::class, 'store']);

    // U -> Update
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
    Route::put('/category/{id}', [CategoryController::class, 'update']);

    // D -> Delete
    Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
});

// Category
// R -> Read
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);

// CRUD Book
Route::resource('books', BookController::class);

// Auth
// Register
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'register']);

// Login
Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Profile
Route::get('/profile', [AuthController::class, 'getprofile'])->middleware('auth');
Route::post('/profile', [AuthController::class, 'createprofile'])->middleware('auth');
Route::put('/profile/{id}', [AuthController::class, 'updateprofile'])->middleware('auth'); 

// Comments
Route::post('/comments/{book_id}',[CommentController::class, 'store'])->middleware('auth');