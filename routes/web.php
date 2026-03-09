<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\MasterController;


/* ================= ADMIN AUTH ================= */

Route::get('/admin/login', [AdminAuthController::class,'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class,'login']);
Route::get('/admin/logout', [AdminAuthController::class,'logout']);


/* ============ ADMIN PROTECTED ROUTES ============ */

Route::middleware('auth:admin')->group(function(){

    Route::get('/admin/dashboard', [AdminController::class,'dashboard']);

    Route::post('/admin/add/{type}', [AdminController::class,'store']);

    Route::get('/admin/delete/{type}/{id}', [AdminController::class,'delete']);

});


/* ================= FRONT SITE ================= */

Route::get('/home', [HomeController::class,'index']);

Route::get('/search', [SearchController::class,'search'])->name('search');


Route::prefix('admin')->middleware('auth:admin')->group(function(){

    Route::get('master/{type}', [MasterController::class,'index']);
    Route::post('master/store', [MasterController::class,'store']);
    Route::post('master/update/{id}', [MasterController::class,'update']);
    Route::get('master/delete/{id}', [MasterController::class,'delete']);

});


use App\Http\Controllers\ProfessionalController;

Route::get('/professionals', [ProfessionalController::class, 'index'])->name('professionals');
Route::get('/professionals/form/{profession}', [ProfessionalController::class, 'form'])->name('profession.form');
Route::post('/professionals/pdf', [ProfessionalController::class, 'generatePdf'])->name('profession.pdf');

use App\Http\Controllers\CandidateController;

Route::get('/professionals', [CandidateController::class, 'professionals'])
    ->name('professionals');

Route::post('/candidate/store', [CandidateController::class, 'store'])
    ->name('candidate.store');

Route::get('/contact-candidate/{id}', [CandidateController::class, 'contactForm'])
    ->name('contact.candidate');

Route::post('/send-message', [CandidateController::class,'sendMessage'])
    ->name('send.message');

// ===job blade recently edited files=====
Route::get('/job', function () {
    return view('job');
})->name('job');
// ======about recently edited files======
Route::get('/about', function () {
    return view('about');
})->name('about');  

// ===contact blade recently edited files=====
Route::get('/contact', function () {
    return view('contact');
})->name('contact');    

use App\Http\Controllers\CandidateViewController;

Route::get('/candidate/{id}/view', [CandidateViewController::class, 'form'])
    ->name('candidate.view.form');

// Route::post('/candidate/view-submit', [CandidateViewController::class, 'submit'])
//     ->name('candidate.view.submit');

    Route::get('/admin/candidate-views', [AdminController::class,'candidateViews']);


    Route::delete('/admin/candidate/{id}', [AdminController::class, 'deleteCandidate'])
      ->name('admin.candidate.delete');


      Route::delete('/admin/candidate/{id}', [AdminController::class, 'deleteCandidate'])
      ->name('admin.candidate.delete');
    
      Route::get('/admin/candidates', [AdminController::class, 'allCandidates']);
Route::get('/admin/candidates/manage', [AdminController::class, 'manageCandidates']);


use App\Http\Controllers\ContactController;

Route::post('/contact-save', [ContactController::class,'store'])->name('contact.store');

Route::get('/admin/contacts', [ContactController::class,'index']);


Route::get('/candidate-resume/{id}', [CandidateController::class, 'openResume'])
    ->name('candidate.resume');
    Route::post('/candidate/submit', [CandidateController::class, 'submit'])
    ->name('candidate.submit');



//     use Illuminate\Support\Facades\Mail;

// Route::get('/test-mail', function () {
//     Mail::raw('Test email from Laravel', function ($msg) {
//         $msg->to('yourgmail@gmail.com')
//             ->subject('Test Mail');
//     });

//     return 'Mail sent!';
// });


Route::get('/admin/candidate-views', [App\Http\Controllers\Admin\CandidateController::class, 'candidateRequests'])
    ->name('admin.candidate.requests');
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])
     ->name('contact.delete');


     use App\Http\Controllers\HomeSearchController;

Route::get('/home', [HomeSearchController::class, 'index'])->name('home');
Route::get('/home-search', [HomeSearchController::class, 'search'])->name('home.search');


Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

Route::delete('/admin/candidate/{id}/photo',
    [AdminController::class, 'deletePhoto']
)->name('admin.candidate.photo.delete');

Route::delete('/admin/candidate/{id}/resume',
    [AdminController::class, 'deleteResume']
)->name('admin.candidate.resume.delete');


Route::get('/', function () {
    return view('entry');
})->name('entry');   
use App\Http\Controllers\CompanyController;

Route::post('/company/store', [CompanyController::class, 'store'])
    ->name('company.store');







use App\Http\Controllers\CompanyLoginController;

Route::get('/login', [CompanyLoginController::class, 'showForm']);
Route::post('/company/join', [CompanyLoginController::class, 'join'])->name('company.join');

// Logout route
Route::post('/logout', function() {
    Auth::logout();
    return redirect('/login')->with('success', 'You have logged out successfully.');
})->name('logout');
/* Forgot password form page */
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('company.forgot.form');

/* Forgot password submit */
Route::post('/forgot-password', [CompanyLoginController::class, 'forgot'])
    ->name('company.forgot.submit');

/* Reset password page */
Route::get('/reset-password/{token}', function ($token) {
    return view('reset-password', compact('token'));
})->name('company.reset.form');

/* Reset password submit */
Route::post('/reset-password', [CompanyLoginController::class, 'reset'])
    ->name('company.reset.submit');

