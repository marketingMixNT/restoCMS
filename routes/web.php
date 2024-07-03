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
Route::get('/o-nas', AboutController::class)->name('about.index');
Route::get('/menu', MenuController::class)->name('menu.index');
Route::get('/galeria', GalleryController::class)->name('gallery.index');
Route::get('/kontakt', ContactController::class)->name('contact.index');
Route::post('/kontakt', ContactController::class)->name('contact.form');
Route::get('/polityka-prywatnosci', PrivacyPolicy::class)->name('privacy-policy.index');

});