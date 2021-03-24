<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', [TweetController::class, 'index'])->name('home');
    
    Route::post('/tweets', [TweetController::class, 'store']);

    Route::post('/profiles/{user:name}/follow', [FollowController::class, 'store']);
});

Route::get('/profile/{user:name}', [ProfileController::class, 'show'])->name('profile');

Auth::routes();

