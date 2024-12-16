<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Websites\GetViewsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(GetViewsController::class)->group(function() {
    Route::get('', 'index')->name('index');
    Route::get('A-Propos', 'about')->name('about');
    Route::get('Evenements', 'event')->name('event');
    Route::get('Hotel', 'hotel')->name('hotel');
    Route::get('Hotel-Details-{id}', 'showrhotel')->name('hotelbyid');
    Route::get('Evenement-Details-{id}', 'showrevent')->name('eventByID');

    Route::get('Restaurant', 'restaurant')->name('restaurant');
    Route::get('Restaurant-Details-{id}', 'showrestaurant')->name('restaurantbyid');
    Route::get('Contact', 'contact')->name('contact');

});

require_once 'user.php';
require_once 'admin.php';
require_once 'supplier.php';
