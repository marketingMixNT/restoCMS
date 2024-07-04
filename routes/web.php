<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PrivacyPolicy;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Livewire\Livewire;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

Route::get('/', HomeController::class)->name('home.index');
Route::get(LaravelLocalization::transRoute('routes.about'), AboutController::class)->name('about.index');
Route::get(LaravelLocalization::transRoute('routes.menu'), MenuController::class)->name('menu.index');
Route::get(LaravelLocalization::transRoute('routes.gallery'), GalleryController::class)->name('gallery.index');
Route::get(LaravelLocalization::transRoute('routes.contact'), ContactController::class)->name('contact.index');
Route::post(LaravelLocalization::transRoute('routes.contact'), ContactController::class)->name('contact.form');
Route::get(LaravelLocalization::transRoute('routes.privacy-policy'), PrivacyPolicy::class)->name('privacy-policy.index');

});



