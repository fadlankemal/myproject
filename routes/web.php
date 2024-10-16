<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('hello', [HelloController::class, 'index']);

Route::get('login', [AuthController::class, 'login']);
Route::post('posts', [PostController::class, 'store']);
Route::get('posts', [PostController::class, 'index']);
Route::get('posts/databarang/tambahdata', [PostController::class, 'create']);
Route::get('posts/databarang',[PostController::class, 'databarang']);
Route::get('posts/databarang/{id}/editdata', [PostController::class, 'edit']);
Route::get('posts/show{id}',[PostController::class, 'show']);
Route::patch('posts/{id}', [PostController::class, 'update']);
Route::delete('posts/{id}', [PostController::class, 'destroy']);