<?php
use App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
Route::group([
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
    Route::group(['as' => 'website.'], function () {
        Route::get('/',[Frontend\FrontController::class, 'index'])->name('home');
    });
    require __DIR__.'/../auth.php';
});
