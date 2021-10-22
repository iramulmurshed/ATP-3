<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;

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
Route::get('/signup', [PagesController::class, 'showSignupPage'])->name('signup');
Route::post('/signup', [signupController::class, 'signupValidation'])->name('signup');
Route::get('/login', [PagesController::class, 'showLoginPage'])->name('login');
Route::post('/login', [loginController::class, 'loginValidation'])->name('login');
