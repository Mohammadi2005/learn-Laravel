<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

// send view
Route::get('/', [
    TemplateController::class,
    "read"
]);

Route::get('/create_post', [
    TemplateController::class,
    'createPost'
]);

Route::get('/posts', function () {
    return view('post');
});



