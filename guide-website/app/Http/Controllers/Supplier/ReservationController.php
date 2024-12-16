<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Models\ReservationHotel;
use App\Http\Controllers\Controller;
use App\Models\ReservationEvenement;
use Illuminate\Support\Facades\Auth;
use App\Models\ReservationRestaurant;

class ReservationController extends Controller
{
    public function index()
    {
        return view('Supplier.Components.reservations.index');
    }
    public function liste_reser_restaur()
    {
        $supplier = Auth::guard('supplier')->user();
        $reservations = $supplier->reservationRestaurants()
        ->orderBy('created_at', 'Desc')->paginate(10);
        return view('Supplier.Components.reservations.restaurants', compact('reservations'));
    }
    public function changerstatusreservations($id, Request $request)
    {
        $reser = ReservationRestaurant::find($id);
        $reser->status = $request->status;
        $reser->save();
        return redirect()->back()->with('success', 'Changement Etat de Reservations Avec Success ');

    }
    public function changerstatusreservations_Hotels($id, Request $request)
    {
        $reser = ReservationHotel::find($id);
        $reser->status = $request->status;
        $reser->save();
        return redirect()->back()->with('success', 'Changement Etat de Reservations Avec Success ');

    }
    public function changerstatusreservationevents($id, Request $request)
    {
        $reser = ReservationEvenement::find($id);
        $reser->status = $request->status;
        $reser->save();
        return redirect()->back()->with('success', 'Changement Etat de Reservations Avec Success ');

    }
    public function liste_reser_hotel()
    {
        $supplier = Auth::guard('supplier')->user();
        $reservations = $supplier->reservationHotels()
        ->orderBy('created_at', 'Desc')->paginate(10);
        return view('Supplier.Components.reservations.hotels',compact('reservations'));
    }
    public function liste_reser_evenements()
    {
         $supplier = Auth::guard('supplier')->user();
        $reservations = $supplier->reservationEvenements()
        ->orderBy('created_at', 'Desc')->paginate(10);
        return view('Supplier.Components.reservations.evenements',compact('reservations'));
    }

}
