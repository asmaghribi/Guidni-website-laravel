<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('Login-Admin', [LoginController::class, 'ShowloginAdmin'])->name('admin.login.show');
Route::post('Login-Admin', [LoginController::class, 'loginAdmin'])->name('admin.login.submit');

Route::prefix('admin')->middleware('auth:admin')->name('admin.')->group(function () {
    Route::get('index', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('index');
    Route::get('fournisseurs', [App\Http\Controllers\Admin\FournisseurController::class, 'index'])->name('fournisseurs');
    Route::put('fournisseurs-{id}', [App\Http\Controllers\Admin\FournisseurController::class, 'UpdateStatus'])->name('UpdateStatus');
    Route::get('clients', [App\Http\Controllers\Admin\ClientController::class, 'index'])->name('clients');
    Route::get('publications', [App\Http\Controllers\Admin\PublicationController::class, 'index'])->name('publications');
    Route::get('hotels', [App\Http\Controllers\Admin\HotelController::class, 'index'])->name('hotels');
    Route::get('evenements', [App\Http\Controllers\Admin\EvenementController::class, 'index'])->name('evenements');
    Route::get('reservations', [App\Http\Controllers\Admin\ResarvationController::class, 'index'])->name('reservations');
    Route::get('reservations-Restaurant', [App\Http\Controllers\Admin\ResarvationController::class, 'liste_reser_restaur'])->name('reservations.restaurants');
        Route::get('reservations-Hotels', [App\Http\Controllers\Admin\ResarvationController::class, 'liste_reser_hotel'])->name('reservations.hotels');
        Route::get('reservations-evenements', [App\Http\Controllers\Admin\ResarvationController::class, 'liste_reser_evenements'])->name('reservations.evenements');
    Route::get('contacts', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contacts');
    Route::get('configurations', [App\Http\Controllers\Admin\ConfigurationController::class, 'index'])->name('configurations');
    Route::resource('restaurants', App\Http\Controllers\Admin\RestaurantController::class)->except('create','store');


});
