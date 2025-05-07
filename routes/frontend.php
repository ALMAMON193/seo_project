<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Frontend\PageController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'subscribe'])->name('subscribe');


Route::controller(PageController::class)->group(function () {
    Route::get('/services', 'servicePage')->name('service');
    Route::get('/about', 'aboutPage')->name('about');

    //service pages all pages controller
    Route::get('/service/local-seo', 'localSeoPage')->name('local-seo');
    //content-seo
    Route::get('/service/content-seo', 'contentSeoPage')->name('content-seo');
    //technical-seo
    Route::get('/service/technical-seo', 'technicalSeoPage')->name('technical-seo');
    //on-page-seo
    Route::get('/service/on-page-seo', 'onPageSeoPage')->name('on-page-seo');
    //keyword-research
    Route::get('/service/keyword-research', 'keywordResearchPage')->name('keyword-research');
    //ecommerce-seo
    Route::get('/service/ecommerce-seo', 'ecommerceSeoPage')->name('ecommerce-seo');
    //data-analytics
    Route::get('/service/data-analytics', 'dataAnalyticsPage')->name('data-analytics');
    //enterprise-seo
    Route::get('/service/enterprise-seo', 'enterpriseSeoPage')->name('enterprise-seo');
    //contact us
    Route::get('/contact-us', 'contactPage')->name('contact');
});



