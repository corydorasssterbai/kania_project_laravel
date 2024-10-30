<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome'); // merujuk 
});

// Route::get('/index', function () {
//     return view('index'); // merujuk 
// });
// Route::get('/login', function () {
//     return view('login'); // merujuk 
// });
// Route::get('/about', function () {
//     return view('about'); // merujuk 
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');