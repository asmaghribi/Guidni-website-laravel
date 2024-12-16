<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Supplier\IndexController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('Login-Supplier', [LoginController::class, 'ShowloginSupplier'])->name('supplier.login.show');
Route::post('Login-Supplier', [LoginController::class, 'loginSupplier'])->name('supplier.login.submit');
Route::get('Register-Supplier', [RegisterController::class, 'ShowRegisterSupplier'])->name('supplier.register.show');
Route::post('Register-Supplier', [RegisterController::class, 'RegisterSupplier'])->name('supplier.register.submit');


Route::prefix('supplier')->middleware('auth:supplier')->name('supplier.')->group(function () {
    Route::get('Activation-Compte', [IndexController::class, 'SupplierNotActive'])->name('NotActive')->middleware('inactive.supplier');


    Route::middleware('active.supplier')->group(function() {
        Route::get('index', [App\Http\Controllers\Supplier\IndexController::class, 'index'])->name('index');
        Route::get('restaurants', [App\Http\Controllers\Supplier\RestaurantController::class, 'index'])->name('restaurants');
        Route::get('restaurants-nouveaux', [App\Http\Controllers\Supplier\RestaurantController::class, 'create'])->name('restaurants.create');
        Route::post('restaurant-nouveau', [App\Http\Controllers\Supplier\RestaurantController::class, 'store'])->name('restaurants.store');
        Route::delete('restaurants-delete-{id}', [App\Http\Controllers\Supplier\RestaurantController::class, 'delete'])->name('restaurants.delete');
        Route::get('restaurants-Consulter-{id}', [App\Http\Controllers\Supplier\RestaurantController::class, 'edit'])->name('restaurants.edit');
        Route::put('update-restaurant-{id}', [App\Http\Controllers\Supplier\RestaurantController::class, 'update'])->name('restaurants.update');
        Route::get('Reservations', [App\Http\Controllers\Supplier\ReservationController::class, 'index'])->name('reservations');
        Route::get('Reservations-Restaurant', [App\Http\Controllers\Supplier\ReservationController::class, 'liste_reser_restaur'])->name('reservations.restaurants');
        Route::get('Reservations-Hotels', [App\Http\Controllers\Supplier\ReservationController::class, 'liste_reser_hotel'])->name('reservations.hotels');
        Route::get('Reservations-evenements', [App\Http\Controllers\Supplier\ReservationController::class, 'liste_reser_evenements'])->name('reservations.evenements');
        Route::post('Reservations-Etat-{id}', [App\Http\Controllers\Supplier\ReservationController::class, 'changerstatusreservations'])->name('changerstatusreservations');
        Route::post('Reservations-Hotel-Etat-{id}', [App\Http\Controllers\Supplier\ReservationController::class, 'changerstatusreservations_Hotels'])->name('changerstatusreservations_Hotels');
        Route::post('Reservations-Evenements-Etat-{id}', [App\Http\Controllers\Supplier\ReservationController::class, 'changerstatusreservationevents'])->name('changerstatusreservationevents');



    });


});
