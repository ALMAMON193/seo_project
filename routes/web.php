<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\AdminController;
use App\Http\Controllers\Web\Backend\ContactController;
use App\Http\Controllers\Web\Backend\SystemSettingController;
use App\Http\Controllers\Web\Backend\CMS\Home\AboutController;
use App\Http\Controllers\web\Backend\CMS\WhatTruestController;
use App\Http\Controllers\Web\Backend\CMS\Home\BannerController;
use App\Http\Controllers\Web\Backend\CMS\About\SeoEspController;
use App\Http\Controllers\Web\Backend\CMS\Home\HistoryController;
use App\Http\Controllers\Web\Backend\CMS\Home\ServiceController;
use App\Http\Controllers\web\Backend\CMS\Home\WhatMakeController;
use App\Http\Controllers\Web\Backend\CMS\Home\WhoWeAreController;

use App\Http\Controllers\Web\Backend\CMS\Service\LocalSeoController;

use App\Http\Controllers\Web\Backend\CMS\About\ScalesAcrossController;
use App\Http\Controllers\Web\Backend\CMS\About\RealExperienceController;
use App\Http\Controllers\Web\Backend\CMS\Home\HowToJoinTheGroupController;
use App\Http\Controllers\Web\Backend\TermsAndConditionAndPrivacyPolicyController;

Route::get('/login', function () {
    if (Auth::check()) {
        if (Auth::user()->email === null || Auth::user()->password === null) {
            Auth::logout();
        } else {
            return redirect()->route('admin.dashboard');
        }
    }
    return view('auth.login');
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

    /* ======= CMS Start================*/
    Route::prefix('admin/cms/home/banner')->name('admin.cms.home.banner.')->controller(BannerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update', 'update')->name('update');
    });
    Route::prefix('admin/cms/home/about')->name('admin.cms.home.about.')->controller(AboutController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/content', 'updateContent')->name('update.content');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/list/{id}', 'update')->name('update.list');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });

    // who
    Route::prefix('admin/cms/home/who-we-are')->name('admin.cms.home.who-we-are.')->controller(WhoWeAreController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/content', 'updateContent')->name('update.content');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/list/{id}', 'update')->name('update.list');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
        Route::post('/cms/home/who-we-are/{cms}/update', 'update')->name('update');
    });

    // who
    Route::prefix('admin/cms/home/what-make')->name('admin.cms.what-make.')->controller(WhatMakeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::put('/update/{cms}', 'update')->name('update');
        Route::post('/update/list/{id}', 'update')->name('update.list');
    });

    // who
    Route::prefix('admin/cms/what-trust')->name('admin.cms.what-trust.')->controller(WhatTruestController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::put('/update/{cms}', 'update')->name('update');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });


    Route::prefix('admin/cms/home/how/join/group')->name('admin.cms.home.how.join.group.')->controller(HowToJoinTheGroupController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/content', 'updateContent')->name('update.content');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/list/{id}', 'update')->name('update.list');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('admin/cms/home/history')->name('admin.cms.home.history.')->controller(HistoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/content', 'updateContent')->name('update.content');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/list/{id}', 'update')->name('update.list');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });

    //============================About us cms route start ======================================//

    Route::prefix('admin/cms/about-us/seo-esp')->name('admin.cms.about-us.seo-esp.')->controller(SeoEspController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/content', 'updateContent')->name('update.content');
    });
    Route::prefix('admin/cms/about-us/real-experience')->name('admin.cms.about-us.real-experience.')->controller(RealExperienceController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/content', 'updateContent')->name('update.content');
    });
    Route::prefix('admin/cms/about-us/scales-across')->name('admin.cms.about-us.scales-across.')->controller(ScalesAcrossController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/content', 'updateContent')->name('update.content');
    });

    //============================About us cms route end ======================================//

    Route::prefix('admin/cms/contact/banner')->name('admin.cms.contact.banner.')->controller(\App\Http\Controllers\Web\Backend\CMS\Contact\BannerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update', 'update')->name('update');
    });
    //Service in home page
    Route::prefix('admin/cms/home/service')->name('admin.cms.home.service.')->controller(ServiceController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/content', 'updateContent')->name('update.content');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/list/{id}', 'update')->name('update.list');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });
    //service banner
    Route::prefix('admin/cms/service/banner')->name('admin.cms.service.banner.')->controller(\App\Http\Controllers\Web\Backend\CMS\Service\BannerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update', 'update')->name('update');
    });
    //Service Local SEO
    Route::prefix('admin/cms/service/real_experience')->name('admin.cms.service.real_experience.')->controller(LocalSeoController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/content', 'updateContent')->name('update.content');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/list/{id}', 'update')->name('update.list');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });


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

require __DIR__ . '/auth.php';
require __DIR__ . '/frontend.php';
