<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    // return view('welcome');
    return view('frontend.home');
})->name('home');

Route::get('/contact-us', [FrontendController::class, 'contactus'])->name('contact-us');
Route::get('/about-us', [FrontendController::class, 'aboutus'])->name('about-us');
Route::get('/sse', [FrontendController::class, 'sse'])->name('sse');
Route::get('/clientele', [FrontendController::class, 'clientele'])->name('clientele');
Route::get('/career', [FrontendController::class, 'career'])->name('career');
Route::get('/feedback-us', [FrontendController::class, 'feedbackus'])->name('feedback-us');
Route::post('/feedback-us-save', [FrontendController::class, 'feedbackussave'])->name('feedback-us.post');
Route::post('/contact-us-save', [FrontendController::class, 'contactussave'])->name('contact-us.post');
Route::get('/service/{slug}', [FrontendController::class, 'services'])->name('service');
Route::get('/solution/{slug}', [FrontendController::class, 'solutions'])->name('solutions');
