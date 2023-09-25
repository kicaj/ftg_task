<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResources([
    'posts' => PostController::class,
    'users' => UserController::class,
]);