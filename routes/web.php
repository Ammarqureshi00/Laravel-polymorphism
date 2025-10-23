<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\Post2Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('user', UserController::class);
Route::resource('post', PostController::class);
Route::resource('post2', Post2Controller::class);
Route::resource('image', ImageController::class);
Route::resource('video', VideoController::class);
