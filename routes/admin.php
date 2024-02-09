<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin.pages.home');
    });

    Route::get('/slider/home', [SliderController::class, 'Slider'])->name('home.slider');
    Route::get('/slider/add', [SliderController::class, 'AddSlider'])->name('add.slider');
    Route::post('/slider/store', [SliderController::class, 'StoreSlider'])->name('store.slider');


});
