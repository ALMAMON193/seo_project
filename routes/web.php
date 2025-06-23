<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\AdminController;
use App\Http\Controllers\Web\Backend\ContactController;
use App\Http\Controllers\Web\Backend\SystemSettingController;

use App\Http\Controllers\Web\Backend\TermsAndConditionAndPrivacyPolicyController;

Route::get('/', function () {
     return view('frontend.layouts.index');
});


Route::middleware('admin')->group(function () {
    //AdminController Routes
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth', 'admin');
    //SystemSettingsController Routes
    Route::get('/admin/system-settings', [SystemSettingController::class, 'index'])->name('admin.system-settings');
    Route::post('/admin/system-settings', [SystemSettingController::class, 'update'])->name('admin.system-settings.update');
    Route::get('/admin/mail-settings', [SystemSettingController::class, 'mailSetting'])->name('admin.mail-settings');
    Route::post('/admin/mail-settings', [SystemSettingController::class, 'mailSettingUpdate'])->name('admin.mail-settings.update');
    Route::get('/admin/profile', [SystemSettingController::class, 'profileIndex'])->name('admin.profile');
    Route::post('/admin/profile', [SystemSettingController::class, 'profileUpdate'])->name('admin.profile.update');
    Route::post('/admin/password', [SystemSettingController::class, 'passwordUpdate'])->name('admin.password.update');
    Route::get('/notify/user/expired-membership', [SystemSettingController::class, 'ExpiredMembership'])->name('admin.notify.expired-membership');
    Route::get('/admin/paypal-settings', [SystemSettingController::class, 'PaypalSetting'])->name('admin.paypal-settings');
    Route::post('/admin/paypal-settings', [SystemSettingController::class, 'paypalSettingUpdate'])->name('admin.paypal-settings.update');

    Route::get('/admin/stripe-settings', [SystemSettingController::class, 'StripeSetting'])->name('admin.stripe-settings');
    Route::post('/admin/stripe-settings', [SystemSettingController::class, 'stripeSettingUpdate'])->name('admin.stripe-settings.update');
    Route::post('/notify-membership/{membershipId}', [SystemSettingController::class, 'notifyMembership']);

    //Contact list History Routes
    Route::get('/admin/contact-history', [\App\Http\Controllers\Web\Backend\ContactHistoryController::class, 'index'])->name('admin.contact-history.index');
    Route::delete('/admin/contact-delete/{id}', [\App\Http\Controllers\Web\Backend\ContactHistoryController::class, 'delete'])->name('admin.contact-hiostory.delete');
    Route::get('/admin/contact-view/{id}', [\App\Http\Controllers\Web\Backend\ContactHistoryController::class, 'view'])->name('admin.contact-hiostory.view');

    //Terms && condition
    Route::controller(TermsAndConditionAndPrivacyPolicyController::class)->prefix('admin/')->name('admin.')->group(function () {
        Route::get('/terms/conditions', 'termsAndCondition')->name('terms.condition.index');
        Route::post('/terms-and-condition/update', 'update')->name('terms.condition.update');
        Route::get('/privacy-policy', 'privacyPolicy')->name('privacy.policy.index');
        Route::post('/privacy-policy/update', 'updatePrivacyPolicy')->name('privacy.policy.update');
    })->middleware(['auth']);
});

Route::controller(ContactController::class)->group(function () {
    Route::POST('/contact-submit', 'contact')->name('contact.store');
    Route::POST('/contact-page-submit', 'ContactContactPage')->name('contact_page.contact.store');
});

require __DIR__ . '/frontend.php';
