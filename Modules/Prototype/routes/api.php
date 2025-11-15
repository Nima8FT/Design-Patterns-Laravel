<?php

use Illuminate\Support\Facades\Route;
use Modules\Prototype\Http\Controllers\PrototypeController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('prototypes', PrototypeController::class)->names('prototype');
});
