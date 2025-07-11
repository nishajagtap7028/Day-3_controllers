<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('Welcome');
});


use App\Http\Controllers\DemoController;

Route::get('user', [DemoController::class, 'getUser']);
