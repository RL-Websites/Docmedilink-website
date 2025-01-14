<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('test', 'test');
    Route::get('our-services', 'services')->name('services');
    Route::get('who-we-serve', 'whoWeServe')->name('who.we.serve');
    Route::get('clinicians', 'clinicians');
    Route::get('why-choose-docmedilink', 'whyChooseDocmedilink');
    Route::post('form-submissions', 'contactFormSubmit');
    Route::post('clinicians-form-submissions', 'cliniciansFormSubmit');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/clinicians', [DashboardController::class, 'clinicians'])->middleware(['auth', 'verified'])->name('dashboard.clinicians');
Route::get('/dashboard/seo', [DashboardController::class, 'seo'])->middleware(['auth', 'verified'])->name('dashboard.seo');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
