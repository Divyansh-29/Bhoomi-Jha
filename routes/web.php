<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\EnquiryController; // Make sure to import the EnquiryController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make a great!
|
*/

// Home route
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

// Contact Us Page - GET request to display the page
Route::get('/contact-us', [FrontendController::class, 'contactus'])->name('contact-us');
// Contact Us Form Submission - POST request to handle the form data
// This route points to the EnquiryController's store method
Route::post('/contact-us', [EnquiryController::class, 'store'])->name('contact-us.post');

// SSE (Sector Specific EC) Pages
Route::get('/sse/{slug}', [FrontendController::class, 'sse'])->name('sse');

// Clientele Page
Route::get('/clientele', [FrontendController::class, 'clientele'])->name('clientele');

// Career Page
Route::get('/career', [FrontendController::class, 'career'])->name('career');

// Feedback Us Page - GET request to display the page
Route::get('/feedback-us', [FrontendController::class, 'feedbackus'])->name('feedback-us');
// Feedback Us Form Submission - POST request to handle the form data
Route::post('/feedback-us-save', [FrontendController::class, 'feedbackussave'])->name('feedback-us.post');

// Old Contact Us Form Submission Route (might be redundant now, but kept for compatibility)
// Consider removing if not used elsewhere
Route::post('/contact-us-save', [FrontendController::class, 'contactussave'])->name('contact-us.save'); 

// About Us Pages
Route::get('/about-us/{slug}', [FrontendController::class, 'aboutus'])->name('about-us');
// Approvals Us Pages
Route::get('/approvals', [FrontendController::class, 'approvals'])->name('approvals');

// Service Pages
Route::get('/service/{slug}', [FrontendController::class, 'services'])->name('service');

// Solution Pages
Route::get('/solution/{slug}', [FrontendController::class, 'solutions'])->name('solutions');

// Standalone Enquiry Store Route (Alternative, if you prefer a dedicated endpoint)
// This is the route from your original snippet, kept for potential use elsewhere
Route::post('/enquiry/store', [EnquiryController::class, 'store'])->name('enquiry.store');

// ... other routes ...

Route::post('/contact-us', [EnquiryController::class, 'store'])->name('contact-us.post');

// ... other routes ...