<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::view('/index','index');

Route::get('/index', function () {
    return view('index');
});

// for small line

// Route::view('/about','about');

// Route::get('/about/', function () {
//     return view('about');
// });

// Route::get('/about/{name}', function ($name) {
//     echo $name;
//     return view('about');
// });

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

//this redirect method

// Route::redirect('/welcome','/index');
