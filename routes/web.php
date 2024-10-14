<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('hello', [HelloController::class, 'index']);

Route::post('posts', [PostController::class, 'store']);
Route::get('posts', [PostController::class, 'index']);
Route::get('posts/databarang/tambahdata', [PostController::class, 'create']);
Route::get('posts/databarang',[PostController::class, 'databarang']);
Route::get('posts/databarang/{id}/editdata', [PostController::class, 'edit']);
Route::patch('posts/{id}', [PostController::class, 'update']);
Route::delete('posts/delete', [PostController::class, 'destroy']);