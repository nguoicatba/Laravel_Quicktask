<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return 'Admin Page';
})->middleware('check.admin'); // Sử dụng middleware CheckAdmin