<?php

use Illuminate\Support\Facades\Route;
use Modules\Singleton\Http\Controllers\SingletonController;

Route::get('singleton', [SingletonController::class, 'index'])->name('singleton');
