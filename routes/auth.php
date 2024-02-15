<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{Admin, User};
// Admins ::
Route::middleware('guest:admin')->prefix('admin')->group(function () {
    Route::get('/', [Admin\AdminAuthenticatedSessionController::class, 'create'])->name('admin.login');
    Route::post('/', [Admin\AdminAuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::post('logout', [Admin\AdminAuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
});

Route::middleware('guest:web')->group(function () {
    Route::get('login', [User\AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [User\AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:web')->group(function () {
    Route::post('logout', [User\AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
