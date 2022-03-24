<?php

use Illuminate\Support\Facades\Route;
use Acvxqs\NovaRegisterpage\Http\Controllers\RegisterController;

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

Route::domain(config('nova.domain', null))
    ->middleware('web')
    ->as('nova.')
    ->prefix(Nova::path())
    ->group(function () {
        Route::get('register', [RegisterController::class, 'showNovaRegisterpageForm'])->name('register');
        Route::post('register', [RegisterController::class, 'register']);
});
