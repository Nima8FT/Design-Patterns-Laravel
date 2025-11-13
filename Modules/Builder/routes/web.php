<?php

use Illuminate\Support\Facades\Route;
use Modules\Builder\Http\Controllers\BuilderController;

Route::get('builder', [BuilderController::class, 'index'])->name('builder.index');
