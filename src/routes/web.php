<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\PortfolioController;
use App\Models\HomeSetting;
use App\Models\ProgressProject;
use App\Models\Project;

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

Route::get('/projects', function () {
    $projects = Project::orderBy('sort_order')->get();

    return view('pages.projects', compact('projects'));
})->name('projects');

Route::get('/progress', function () {

    $progressProjects = ProgressProject::orderBy('sort_order')
        ->get();

    return view('pages.progress', compact('progressProjects'));

})->name('progress');

Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'send'])->name('contact.send');

