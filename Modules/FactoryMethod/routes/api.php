<?php

use Illuminate\Support\Facades\Route;
use Modules\FactoryMethod\Http\Controllers\FactoryMethodController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('factorymethods', FactoryMethodController::class)->names('factorymethod');
});
