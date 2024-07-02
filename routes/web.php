<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;

Route::get('/', HomeController::class)->name('home.index');
Route::get('/o-nas', AboutController::class)->name('about.index');
Route::get('/galeria', GalleryController::class)->name('gallery.index');

