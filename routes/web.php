<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\TweetLikeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    // TWEETS
    Route::get('/tweets', [TweetController::class, 'index'])->name('home');
    Route::post('/tweets', [TweetController::class, 'store']);
    
    // LIKES/DISLIKES
    Route::post('/tweets/{tweet}/like', [TweetLikeController::class, 'store']);
    Route::delete('/tweets/{tweet}/like', [TweetLikeController::class, 'destroy']);

    // FOLLOW
    Route::post('/profiles/{user:username}/follow', [FollowController::class, 'store']);

    // PROFILES
    Route::get('/profiles/{user:username}/edit', [ProfileController::class, 'edit'])->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', [ProfileController::class, 'update'])->middleware('can:edit,user');

    // EXPLORE
    Route::get('explore', [ExploreController::class, 'index']);
});

Route::get('/profiles/{user:username}', [ProfileController::class, 'show'])->name('profile');

Auth::routes();