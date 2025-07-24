<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\ContactController;


Route::get('/', function () {
    return view('frontend.layouts.index');
});

Route::controller(ContactController::class)->group(function () {
    Route::post('/contact-us', 'contactPageStore')->name('contact.page.store'); // for submitting the form
});
require __DIR__ . '/frontend.php';
