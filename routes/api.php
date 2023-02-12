<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'authenticate']);
    Route::get('only-auth', [AuthController::class, 'onlyAuth'])->middleware('authenticated');
});
