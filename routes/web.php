<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookRpcController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/profile/create', [ProfileController::class, 'showForm']);
//Route::post('/profile/result', [ProfileController::class, 'processForm']);

//Route::get('/example/create', [ExampleController::class, 'create']);
//Route::post('/example/result', [ExampleController::class, 'result']);



