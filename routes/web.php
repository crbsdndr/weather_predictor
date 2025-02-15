<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Data welcome   
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
