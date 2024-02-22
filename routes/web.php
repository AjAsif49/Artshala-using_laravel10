<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\About;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $sliders  = Slider::all();
    $services = Service::all();
    $abouts   = About::latest()->first();
    $clients  = Client::all();
    $contact  = Contact::latest()->first();
    return view('web.layouts.main', compact('sliders', 'abouts', 'services', 'clients', 'contact'));
})->name('/')    ;

Route::get('/contact', [HomeController::class, 'Contact'])->name('contact');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/clients', [HomeController::class, 'Clients'])->name('clients');

Route::post('/message', [HomeController::class, 'Message'])->name('message');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
