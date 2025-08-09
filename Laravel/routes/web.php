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

Route::get('/update_post', [
    TemplateController::class,
    'updatePost'
]);

Route::get('/delete_post', [
    TemplateController::class,
    'deletePost'
]);

Route::get('/delete_comment/{comment_id}', [
    TemplateController::class,
    'deleteComment'

]);

Route::get('/restore_comment/{comment_id}', [
    TemplateController::class,
    'restoreComment'
]);

