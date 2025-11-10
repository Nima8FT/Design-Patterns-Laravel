<?php

use Illuminate\Support\Facades\Route;
use Modules\FactoryMethod\Http\Controllers\FactoryMethodController;


Route::get('/factorymethods', [FactoryMethodController::class, 'index']);
