<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\XController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// About Us
Route::get('/about-us', [XController::class, 'aboutUs'])->name('aboutUs.view');

// Contact Us
Route::get('/contact-us', [XController::class, 'contactUs'])->name('contactUs.view');

// FAQs
Route::get('/faq', [XController::class, 'faq'])->name('faq.view');

// Pricing
Route::get('/pricing', [XController::class, 'pricing'])->name('pricing.view');

// Services
Route::get('/services_1', [XController::class, 'servicesI'])->name('servicesI.view');
Route::get('/services_2', [XController::class, 'servicesII'])->name('servicesII.view');
Route::get('/services_3', [XController::class, 'servicesIII'])->name('servicesIII.view');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
