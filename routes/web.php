<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', function () {
    return view('dashboard');
});


Route::get('/', function () {
    return view('welcome');
});
