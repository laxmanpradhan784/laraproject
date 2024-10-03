<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

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

Route::get('user', [UserController::class, 'getUser']);
Route::get('use', [UserController::class, 'getadmin']);
Route::get('about', [UserController::class, 'aboutuser']);
Route::get('name', [UserController::class, 'username']);
Route::get('nam/{name}', [UserController::class, 'usern']);
Route::get('na', [UserController::class, 'admin']);
Route::get('reg', [UserController::class, 'register']);
