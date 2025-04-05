<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MailController;
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

// Route::post('/contact-submit', [MasterController::class, 'submit'])->name('contact.submit');

Route::get('/component-hero', [MasterController::class, 'hero'])->name('component-hero');

Route::get('/services/sop-assistance', function () {
    return view('services.sop-assistance.index');
});
Route::get('/services/course-selection', function () {
    return view('services.course-selection.course-selection');
});
Route::get('/services/counselling', function () {
    return view('services.counselling.counselling');
});
Route::get('/services/getting-admission', function () {
    return view('services.getting-admission.index');
});
Route::get('/services/counselling', function () {
    return view('services.counselling.counselling');
});

Route::get('/services/mock-interviews', function () {
    return view('services.mock.mock');
});
Route::get('/services/travel-arrangements', function () {
    return view('services.travelling.travel');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/submit-registration', [MailController::class, 'sendVisaAssistanceEmail'])->name('submit.registration');
Route::post('/contact-submit', [MailController::class, 'contactSubmit'])->name('contact.submit');


require __DIR__.'/auth.php';
