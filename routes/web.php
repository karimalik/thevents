<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\WelcomeController;
// use App\Http\Controllers\NewsLetterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * 
 * website route
 */
Route::get('about-us', [App\Http\Controllers\AboutController::class, 'index'])->name('about-us');
Route::get('contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-us');
Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::post('newsletter', [App\Http\Controllers\NewsLetterController::class, 'store'])->name('newsLetter.store');
Route::get('booking-events', [App\Http\Controllers\EventsController::class, 'index'])->name('booking-events.index');
Route::resource('/', WelcomeController::class);

Route::group(['middliware' => 'auth', 'prefix' => 'cpanel'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('booking-events', EventsController::class)->except('index');
});

Auth::routes();

