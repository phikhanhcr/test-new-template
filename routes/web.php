<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

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
Route::get('/signin', [AuthController::class, 'getSignin'])->name('getSignin');
Route::get('/signup', [AuthController::class, 'getSignup'])->name('getSignup');
Route::post('/auth/signin', [AuthController::class, 'postSignin'])->name('postSignin');
Route::post('/auth/signup', [AuthController::class, 'postSignup'])->name('postSignup');

Route::get('/', [PageController::class, 'getIndex'])->name('getIndex');
Route::get('/refund-policy', [PageController::class, 'getRefundPolicy'])->name('getRefundPolicy');
Route::get('/renewal-policy', [PageController::class, 'getRenewalPolicy'])->name('getRenewalPolicy');
Route::get('/pricing', [PaymentController::class, 'getPricing'])->name('getPricing');
Route::get('/contact', [PageController::class, 'getContact'])->name('getContact');
Route::get('/terms-of-service', [PageController::class, 'getTermOfService'])->name('getTermOfService');

Route::get('/download', [PageController::class, 'getDownload'])->name('getDownload');
Route::get('/about-us', [PageController::class, 'getAboutUs'])->name('getAboutUs');
Route::get('/privacy-policy', [PageController::class, 'getPrivacyPolicy'])->name('getPrivacyPolicy');

Route::get('/logout', [AuthController::class, 'getLogout'])->name('getLogout');
Route::get('/profile', [AuthController::class, 'getProfile'])->name('getProfile');
