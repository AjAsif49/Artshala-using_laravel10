<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin.pages.home');
    });
    
    //Admin Routes
    Route::get('/admin/profile', [ProfileController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/update', [ProfileController::class, 'AdminProfileUpdate']);


    //Slider Routes
    Route::get('/slider/home', [SliderController::class, 'Slider'])->name('home.slider');
    Route::get('/slider/add', [SliderController::class, 'AddSlider'])->name('add.slider');
    Route::post('/slider/store', [SliderController::class, 'StoreSlider'])->name('store.slider');
    Route::get('/slider/edit/{id}', [SliderController::class, 'EditSlider'])->name('edit.slider');
    Route::post('/slider/update/{id}', [SliderController::class, 'UpdateSlider'])->name('update.slider');
    Route::get('/slider/delete/{id}', [SliderController::class, 'DeleteSlider'])->name('delete.slider');

    //About Us routes
    Route::get('/about/home', [AboutController::class, 'About'])->name('home.about');
    Route::get('/about/add', [AboutController::class, 'AddAbout'])->name('add.about');
    Route::post('/about/store', [AboutController::class, 'StoreAbout'])->name('store.about');
    Route::get('/about/edit/{id}', [AboutController::class, 'EditAbout'])->name('edit.about');
    Route::post('/about/update/{id}', [AboutController::class, 'UpdateAbout'])->name('update.about');
    Route::get('/about/delete/{id}', [AboutController::class, 'DeleteAbout'])->name('delete.about');

    //Service routes
    Route::get('/service/home', [ServiceController::class, 'Service'])->name('home.service');
    Route::get('/service/add', [ServiceController::class, 'AddService'])->name('add.service');
    Route::post('/service/store', [ServiceController::class, 'StoreService'])->name('store.service');
    Route::get('/service/edit/{id}', [ServiceController::class, 'EditService'])->name('edit.service');
    Route::post('/service/update/{id}', [ServiceController::class, 'UpdateService'])->name('update.service');
    Route::get('/service/delete/{id}', [ServiceController::class, 'DeleteService'])->name('delete.service');

});
