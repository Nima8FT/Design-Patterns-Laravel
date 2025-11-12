<?php

use Illuminate\Support\Facades\Route;
use Modules\AbstractFactory\Http\Controllers\AbstractFactoryController;

Route::get('/abstract-factory', [AbstractFactoryController::class, 'index'])->name('abstract.factory.index');
