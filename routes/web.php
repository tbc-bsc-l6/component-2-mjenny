<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;

// Route to show the login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');

// Route to handle the login submission
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); 
Route::post('login', [LoginController::class, 'login']); 
Route::post('logout', [LoginController::class, 'logout'])->name('logout'); 

//Route for registration

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register'); 
Route::post('register', [RegisterController::class, 'store'])->name('register.store'); 

// Auth::routes();
Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth'])->get('/product', function () {
    return view('product'); 
})->name('product');

Route::middleware(['auth'])->get('/profile', function () {
    return view('profile');
})->name('profile');

Route::middleware(['auth'])->get('/about', function () {
    return view('about');
})->name('about');


Route::get('/', function () {
    return view('index'); 
})->name('index');
