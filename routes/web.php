<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OpController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('index');
});

//Route::get('hello', [HelloController::class, 'index']);

// Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::post('register', [AuthController::class,'register']);
Route::get('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);

Route::post('data', [BarangController::class, 'store']);
Route::get('index', [BarangController::class, 'index']);
Route::get('databarang/tambahdata', [BarangController::class, 'create']);
Route::get('databarang',[BarangController::class, 'databarang']);
Route::get('databarang/{id}/editdata', [BarangController::class, 'edit']);
Route::get('data/show{id}',[BarangController::class, 'show']);
Route::patch('data/{id}', [BarangController::class, 'update']);
Route::delete('data/{id}', [BarangController::class, 'destroy']);

Route::post('dataop', [OpController::class, 'store']);
Route::get('dataoperator',[OpController::class, 'index']);
Route::get('dataoperator/tambahdata', [OpController::class, 'create']);
Route::get('dataoperator/{id}/editdataop', [OpController::class, 'edit']);
Route::patch('dataop/{id}', [OpController::class, 'update']);
Route::delete('dataop/{id}', [OpController::class, 'destroy']);

