<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;
Route::get('/', [SystemController::class,'index'])->name('home');
