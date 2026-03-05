<?php

use App\Http\Controllers\BookApiController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookSacController;
use Illuminate\Support\Facades\Route;

Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);

Route::get('/sac/books/{id}', BookSacController::class);


Route::get('/rest/books', [BookRestController::class, 'index']);
Route::get('/rest/books/create', [BookRestController::class, 'create']);
Route::post('/rest/books', [BookRestController::class, 'store']);
Route::get('/rest/books/{id}', [BookRestController::class, 'show']);
Route::get('/rest/books/{id}/edit', [BookRestController::class, 'edit']);
Route::put('/rest/books/{id}', [BookRestController::class, 'update']);
Route::delete('/rest/books/{id}', [BookRestController::class, 'destroy']);

Route::get('/restapi/books', [BookApiController::class, 'index']);
Route::post('/restapi/books', [BookApiController::class, 'store']);
Route::get('/restapi/books/{id}', [BookApiController::class, 'show']);
Route::put('/restapi/books/{id}', [BookApiController::class, 'update']);
Route::delete('/restapi/books/{id}', [BookApiController::class, 'destroy']);
