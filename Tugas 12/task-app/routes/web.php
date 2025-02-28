<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CategoryController;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/form', [FormController::class, 'form']);
Route::post('/welcome', [FormController::class, 'SignUp']);

Route::get('/master', function() {
    return view('layouts.master');
});

// Category
// C -> Create
Route::get('category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);

// R -> Read
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);

// U -> Update
Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/category/{id}', [CategoryController::class, 'update']);

// D -> Delete
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);