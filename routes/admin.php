<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin.pages.home');
    });


});
