<?php

use App\Http\Controllers\Front\PageController;
use App\Mail\ContactSubmissionMail;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/our-services', [PageController::class, 'services'])->name('services');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('/contact-form', [PageController::class, 'getContactForm'])->name('contact.form');
Route::post('/contact-us', [PageController::class, 'submitContact'])->name('contact.submit')->middleware('throttle:3,1');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

// Diagnostic Email
Route::get('/test-email', [PageController::class, 'testEmailForm'])->name('test.email');
Route::post('/test-email', [PageController::class, 'sendTestEmail'])->name('test.email.send');

Route::get('/test-mail', function () {
    Mail::to('test@example.com')->send(new ContactSubmissionMail(new ContactSubmission([
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'subject' => 'Test Subject',
        'message' => 'Test Message'
    ])));
    return "Email envoyé !";
});
