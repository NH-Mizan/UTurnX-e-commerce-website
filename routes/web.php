<?php

use App\Http\Controllers\Frontend\FrontEndController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontEndController::class, 'index'])->name('home');
