<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\ContactController;


Route::get('/', function () {
    return view('frontend.layouts.index');
});

Route::controller(ContactController::class)->group(function () {
    Route::POST('/contact-submit', 'contactPageStore')->name('contact.store');
    Route::POST('/contact-page-submit', 'ContactContactPage')->name('contact_page.contact.store');
});

require __DIR__ . '/frontend.php';
