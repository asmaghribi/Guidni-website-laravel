<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\ReservationController;

Auth::routes();
Route::get('/home', [IndexController::class, 'index'])->name('home');
Route::prefix('')->middleware('auth:web')->name('user.')->group(function () {

    Route::post('reserver-restaurant-{id}', [ReservationController::class, 'reserveRestaurant'])->name('reserver-restaurant');
    Route::post('reserver-hotel-{id}', [ReservationController::class, 'reservehotel'])->name('reserver-hotel');
    Route::post('reserver-event-{id}', [ReservationController::class, 'reserveevent'])->name('reserver-event');
    Route::post('updateInfo', [IndexController::class, 'updateInfo'])->name('updateInfo');
    Route::post('updatepassword', [IndexController::class, 'updatepassword'])->name('updatepassword');
    Route::get('mes-reservations-rest', [ReservationController::class, 'mesResRestau'])->name('mes_reservations_restaurant');
    Route::get('mes-reservations-hotel', [ReservationController::class, 'mesResHotel'])->name('mes_reservations_hotel');
    Route::get('mes-reservations-evenements', [ReservationController::class, 'mesResEven'])->name('mes_reservations_evenement');




});
