<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');//change to login to view login, welcome=dashboard
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');


Route::get('/subscribers', function () {
    return view('subscribers');
})->name('subscribers');

Route::get('/mealsetter', function () {
    return view('mealsetter');
})->name('mealsetter');

?> 