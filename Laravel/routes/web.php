<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

// send view
Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {
    return view('post');
});



