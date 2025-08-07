<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;


Route::get('/', function () {
    return "<h1>Hello World!</h1>";
});

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




