<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // merujuk 
});

Route::get('/index', function () {
    return view('index'); // merujuk 
});
Route::get('/about', function () {
    return view('Tentang Que'); // merujuk 
});
Route::get('/login', function () {
    return view('login'); // merujuk 
});