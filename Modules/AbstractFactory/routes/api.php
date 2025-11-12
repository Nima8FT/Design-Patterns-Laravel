<?php

use Illuminate\Support\Facades\Route;
use Modules\AbstractFactory\Http\Controllers\AbstractFactoryController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('abstractfactories', AbstractFactoryController::class)->names('abstractfactory');
});
