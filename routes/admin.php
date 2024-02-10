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
    Route::get('/slider/edit/{id}', [SliderController::class, 'EditSlider'])->name('edit.slider');
    Route::post('/slider/update/{id}', [SliderController::class, 'UpdateSlider'])->name('update.slider');
    Route::get('/slider/delete/{id}', [SliderController::class, 'DeleteSlider'])->name('delete.slider');

});
