<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GraveController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

// Public pages

Route::group([], function() {

    Route::get('/', fn () => view('pages.home'))->name('home');
    Route::get('/map', fn () => view('pages.map'))->name('map');
    Route::get('/about', fn () => view('pages.about'))->name('about');
    Route::get('/search', fn() => view('pages.search'))->name('search');
    Route::get('/pricing', fn() => view('pages.pricing'))->name('pricing');
    Route::get('/#contact', fn () => view('pages.contact'))->name('contact');
    Route::get('/reservations/new', [ReservationController::class, 'createReservation'])->name('reservations.new');
    Route::post('/reservations/create', [ReservationController::class, 'storeReservation'])->name('reservations.store');
    Route::get('/reservations/success', [ReservationController::class, 'successReservation'])->name('reservations.success');
    Route::get('/rate-us', [FeedbackController::class, 'index'])->name('feedback.index');
    // Public grave details
    Route::get('/graves/{grave}', [GraveController::class, 'show'])
    ->name('grave.show')
    ->where('grave', '[0-9]+');
    
    // Admin login (publicly accessible)
    Route::get('/admin/login', fn () => view('pages.auth.login'))->name('login');
    Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
});

// Admin dashboard (requires authentication)
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/records/new', [DashboardController::class, 'insert'])->name('admin.records.new');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/records/{id}', [DashboardController::class, 'show'])->name('admin.records.show');
    Route::put('/records/{id}', [DashboardController::class, 'update'])->name('admin.records.update');
    Route::post('/records/create', [DashboardController::class, 'store'])->name('admin.records.store');
    Route::get("/reservations", [ReservationController::class, 'index'])->name('admin.reservations.index');
    Route::get('/galleries', [GalleryController::class, 'index'])->name('admin.galleries.index');
    Route::get('/galleries/new', [GalleryController::class, 'create'])->name('admin.galleries.create');
    Route::post('/galleries/create', [GalleryController::class, 'store'])->name('admin.galleries.store');
    Route::get('/feedback', [FeedbackController::class, 'show'])->name('admin.feedbacks');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});