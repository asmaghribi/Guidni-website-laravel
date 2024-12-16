<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ReservationHotel;
use App\Http\Controllers\Controller;
use App\Models\ReservationEvenement;
use App\Models\ReservationRestaurant;

class ResarvationController extends Controller
{
    public function index()
    {
        return view('Admin.Components.reservations.index');
    }
    public function liste_reser_restaur()
    {

        $reservations = ReservationRestaurant::orderBy('created_at', 'Desc')->paginate(10);
        return view('Admin.Components.reservations.restaurants', compact('reservations'));
    }
    public function liste_reser_hotel()
    {
        $reservations = ReservationHotel::orderBy('created_at', 'Desc')->paginate(10);

        return view('Admin.Components.reservations.hotels',compact('reservations'));
    }
    public function liste_reser_evenements()
    {
        $reservations = ReservationEvenement::orderBy('created_at', 'Desc')->paginate(10);

        return view('Admin.Components.reservations.evenements',compact('reservations'));
    }
}
