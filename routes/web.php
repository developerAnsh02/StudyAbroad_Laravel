<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UniversityController;



Route::get('/', function () {
    return view("home");
})->name('home');

Route::get('/contact', function () {
    return view("contact");
})->name('contact');

Route::get('/about', function () {
    return view("about");
})->name('about');
Route::get('/privacy-policy', function () {
    return view("privacy-policy");
})->name('privacy_policy');
Route::get('/terms-of-service', function () {
    return view("terms-of-service");
})->name('terms_of_service');





// Route::get('/universities', [UniversityController::class, 'index'])->name('universities.index');
// Route::post('/universities/search', [UniversityController::class, 'handleSubmit'])->name('universities.search');
Route::get('/universities', [UniversityController::class, 'index'])->name('universities.index');
Route::get('/universities/{country}/{courseLevel?}/{tuitionRange?}', [UniversityController::class, 'showByCountry'])
    ->name('universities.byCountry');


// Route::post('/contact-submit', [MasterController::class, 'submit'])->name('contact.submit');

Route::get('/component-hero', [MasterController::class, 'hero'])->name('component-hero');


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});


// services routes start

    // Route::get('/services/sop-assistance', function () {
    //     $meta = [
    //         'title' => 'Custom SOP Assistance Title | Laravel Route Override',
    //         'description' => 'This meta description is passed directly from the route instead of the config.',
    //         'keywords' => 'sop, visa, statement of purpose, writing help',
    //     ];
    //     return view('services.sop-assistance.index', compact('meta'));
    // })->name('sop_assistance');

    Route::get('/services/sop-assistance', function () {
        return view('services.sop-assistance.index');
    })->name('sop_assistance');

    Route::get('/services/course-selection', function () {
        return view('services.course-selection.course-selection');
    })->name('course_selection');

    Route::get('/services/counseling-with-an-expert', function () {
        return view('services.counselling.counselling');
    })->name('counseling_with_an_expert');

    Route::get('/services/getting-admission', function () {
        return view('services.getting-admission.index');
    })->name('getting_admission');    

    Route::get('/services/mock-interviews', function () {
        return view('services.mock.mock');
    })->name('mock_interviews');

    Route::get('/services/travel-arrangements', function () {
        return view('services.travelling.travel');
    })->name('travel_arrangements');

    Route::get('/services/visa-assistance', function () {
        return view('services.visa-assistance.visa');
    })->name('visa_assistance');

    Route::get('/services/free-profile-evaluation', function (){
        return view('services.free-profile-evaluation.free-profile-evaluation');
    })->name('free_profile_evaluation');

    Route::get('/services/education-loan', function (){
        return view('services.education-loan.education-loan');
    })->name('education_loan');

    Route::get('/services/post-landing-services', function (){
        return view('services.post-landing-services.post-landing');
    })->name('post_landing');

// services routes end

// country routes start
    Route::get('/country/uk', function () {
        return view('countries.uk');
    })->name('uk');

    Route::get('/country/usa', function () {
        return view('countries.usa');
    })->name('usa');

    Route::get('/country/canada', function () {
        return view('countries.canada');
    })->name('canada');

    Route::get('/country/europe', function () {
        return view('countries.europe');
    })->name('europe');

    Route::get('/country/new-zealand', function () {
        return view('countries.newzealand');
    })->name('new_zealand');

    Route::get('/country/australia', function () {
        return view('countries.australia');
    })->name('australia');

    Route::get('/country/international', function () {
        return view('countries.international');
    })->name('international');

// country routes end

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

Route::get('/thankyou', function () {
    if (!session('visa_form_submitted')) {
        abort(404); // prevent direct access
    }

    // Forget the session so refresh won't keep working
    session()->forget('visa_form_submitted');

    return view('thankyou'); // adjust view path as needed
})->name('thankyou');

require __DIR__.'/auth.php';
