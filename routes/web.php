<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('profile', ProfileController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('projet', ProjetController::class);
    route::resource('blog', BlogController::class);
    Route::resource('site', SiteController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('education', EducationController::class);
    Route::resource('skill', SkillController::class);
    Route::resource('award', AwardController::class);
    Route::resource('experience', ExperienceController::class);
});
