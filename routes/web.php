<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('index');
});
Route::view('/login', 'login');
Route::get('/redirect', [SocialiteController::class, 'redirect'])->name('redirect')->middleware('guest');
Route::get('/auth/callback', [SocialiteController::class, 'callback'])->name('callback')->middleware('guest');
Route::post('/logout', [SocialiteController::class, 'logout'])->name('logout');
