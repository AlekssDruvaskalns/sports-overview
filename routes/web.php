<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Athlete_BasketballController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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
});

Route::resource('basketball', Athlete_BasketballController::class);
Route::resource('main', MainController::class);
Route::get('basketball/sort/{sort_by}', [Athlete_BasketballController::class, 'index'])->name('basketball.sort');


require __DIR__.'/auth.php';
