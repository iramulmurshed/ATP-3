<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'showHomePage'])->name('home');
Route::get('/services', [PagesController::class, 'showServicesPage'])->name('services');
Route::get('/our-teams', [PagesController::class, 'showOurTeamsPage'])->name('ourTerms');
Route::get('/about-us', [PagesController::class, 'showAboutUsPage'])->name('aboutUs');
Route::get('/contact-us', [PagesController::class, 'showContactUsPage'])->name('contactUs');

