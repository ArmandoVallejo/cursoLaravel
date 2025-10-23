<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

Route::get('post/all', [PostController::class, 'all'])->middleware('auth:api');

Route::get('user', [AuthController::class, 'user'])->middleware('auth:api');

Route::get('category/{category}/posts', [CategoryController::class, 'getPosts']);

Route::get('post/slug/{slug}', [PostController::class, 'slug']);

Route::get('category/slug/{slug}', [CategoryController::class, 'slug']);

Route::get('category/all', [CategoryController::class, 'all']);

Route::resource('category', CategoryController::class)->except(['create', 'edit']);

Route::resource('post', PostController::class)->except(['create', 'edit']);

Route::post('login', [AuthController::class, 'login']);
