<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

Route::apiResources([
    'posts' => PostController::class,
]);