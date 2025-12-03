<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/',  [SiteController::class, 'getHome'])->name('getHome');
Route::get('/aboutus', [SiteController::class, 'getAboutUs'])->name('getAboutUs');
Route::get('/services', [SiteController::class, 'getServices'])->name('getServices');
Route::get('/blogs', [SiteController::class, 'getBlogs'])->name('getBlogs');
Route::get('/gallery', [SiteController::class, 'getGallery'])->name('getGallery');
Route::get('/contactus', [SiteController::class, 'getContactUs'])->name('getContactUs');