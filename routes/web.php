<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Petani\PengajuanModalController;
use App\Http\Controllers\Poktan\KonfirmasiModalController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::middleware(['auth', 'role:Petani'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/petani/dashboard', [PengajuanModalController::class, 'index'])->name('partner.dashboard.index');
    Route::get('/petani/pengajuan', [PengajuanModalController::class, 'pengajuan'])->name('partner.dashboard.pengajuan');
    Route::get('/petani/pengajuan/add', [PengajuanModalController::class, 'add'])->name('partner.dashboard.pengajuan.add');
    Route::get('/petani/pengajuan/edit/{id}', [PengajuanModalController::class, 'show'])->name('partner.dashboard.pengajuan.edit');
    Route::put('/petani/pengajuan/update/{id}', [PengajuanModalController::class, 'update'])->name('partner.dashboard.pengajuan.update');
    Route::get('/petani/pengajuan/detail/{id}', [PengajuanModalController::class, 'detail'])->name('partner.dashboard.pengajuan.detail');
    Route::post('/petani/pengajuan/store', [PengajuanModalController::class, 'store'])->name('partner.dashboard.pengajuan.store');
    Route::delete('/petani/pengajuan/{id}', [PengajuanModalController::class, 'destroy'])->name('partner.dashboard.pengajuan.destroy');
    
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
});

Route::middleware(['auth', 'role:Poktan'])->group(function () {
    Route::get('/poktan/konfirmasi/show/{id}', [KonfirmasiModalController::class, 'show'])->name('poktan.konfirmasi.show');
    Route::get('/poktan/konfirmasi', [KonfirmasiModalController::class, 'index'])->name('poktan.konfirmasi');
    Route::put('/poktan/konfirmasi/{id}', [KonfirmasiModalController::class, 'confirm'])->name('poktan.konfirmasi.status');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
