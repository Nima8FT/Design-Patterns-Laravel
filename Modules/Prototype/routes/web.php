<?php

use Illuminate\Support\Facades\Route;
use Modules\Prototype\Http\Controllers\PrototypeController;

Route::get('prototype', [PrototypeController::class, 'index']);
Route::get('laravel-prototype', [PrototypeController::class, 'laravelPrototype']);
