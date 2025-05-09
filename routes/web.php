<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     // return view('welcome');

// });

Route::get('/test', function () {
    $rickrollUrl = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
    echo '<a href="' . $rickrollUrl . '" target="_blank">Klikšķini šeit, lai redzētu kaut ko interesantu!</a>';
});

Route::get('/about', [AboutController::class, 'index']);

Route::get('/post', [PostController::class, 'showPosts']);