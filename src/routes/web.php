<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\PortfolioController;
use App\Models\HomeSetting;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
Route::get('/', function () {
    $home = HomeSetting::content();
    return view('pages.home', compact('home'));
})->name('home');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/progress', [PortfolioController::class, 'progress'])->name('progress');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'send'])->name('contact.send');

