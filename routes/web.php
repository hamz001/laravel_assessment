<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/game/manage', [GameController::class, 'manage'])->middleware(['auth', 'verified']);
Route::get('/game/create', [GameController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/game', [GameController::class, 'store'])->middleware(['auth', 'verified']);
Route::delete('/game/{slug}', [GameController::class, 'remove'])->middleware(['auth', 'verified']);

//search Route
Route::get('/search', [GameController::class, 'search']);

Route::get('/', [GameController::class, 'index']);
Route::get('/game/{slug}', [GameController::class, 'game']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
