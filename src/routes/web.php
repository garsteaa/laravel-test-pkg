<?php

use Garstea\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where all routes for package needed are registered!
|
*/

Route::get('/contact', [ContactController::class, 'index'])->name('garstea.contact');

Route::post('/contact-send', [ContactController::class, 'sendEmail'])->name('garstea.contact.send');
