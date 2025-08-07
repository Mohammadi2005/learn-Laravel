<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

// send view
Route::get('/', function () {
    return view('home');
});

// send view in direction
Route::get('/posts', function () {
    return view('myDir/viewPost');
});

// send view with static data
Route::get('/name',[
    TemplateController::class,
    "sendDataToView"
]);

// send view with dynamic data
Route::get('/post/{id}', [
    TemplateController::class,
    "post"
]);

Route::get("/test", function () {
    return "<h1>Test Route...</h1>";
});

Route::get("/user/{id?}", function ($user_id = null) {
    if ($user_id == null) {
        return "<h1>All users</h1>";
    }
    return "<h1>this is User {$user_id}</h1>";
});

Route::get("/action", [
    TemplateController::class,
    "testAction"
]);

Route::get("/action-user/{id}", [
    TemplateController::class,
    "testActionUser"
]);




