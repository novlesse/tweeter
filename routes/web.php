<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    // TWEETS
    Route::get('/tweets', [TweetController::class, 'index'])->name('home');
    Route::post('/tweets', [TweetController::class, 'store']);

    Route::post('/profiles/{user:username}/follow', [FollowController::class, 'store']);

    // PROFILES
    Route::get('/profiles/{user:username}/edit', [ProfileController::class, 'edit'])->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', [ProfileController::class, 'update']);
});

Route::get('/profiles/{user:username}', [ProfileController::class, 'show'])->name('profile');

Auth::routes();

