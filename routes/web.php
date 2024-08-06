<?php

use App\Http\Controllers\CoverController;
use App\Http\Controllers\Profile\AvatarController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/avatar', [AvatarController::class, 'update'])->name('profile.avatar');
    Route::patch('/profile/cover', [CoverController::class, 'update'])->name('profile.cover');
    Route::get('/user', [AvatarController::class, 'index'])->name('user');
    Route::get('/user/detail/{id}', [ProfileController::class, 'detail'])->name('user.detail');
});

Route::get('/openai', function(){

    $result = OpenAI::chat()->create([
        'model' => 'gpt-3.5-turbo',
        'messages' => [
            ['role' => 'user', 'content' => 'Hello!'],
        ],
    ]);

    echo $result->choices[0]->message->content; // Hello! How can I assist you today?
});

require __DIR__ . '/auth.php';
