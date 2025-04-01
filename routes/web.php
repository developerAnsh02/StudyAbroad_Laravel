<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/', [MasterController::class, 'homePage']);
Route::get('/contact', [MasterController::class, 'ContactPage']);
Route::get('/about', [MasterController::class, 'aboutPage']);

Route::post('/contact-submit', [MasterController::class, 'submit'])->name('contact.submit');

Route::get('/component-hero', [MasterController::class, 'hero'])->name('component-hero');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
