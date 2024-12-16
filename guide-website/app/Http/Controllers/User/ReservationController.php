<?php

namespace App\Http\Controllers\User;

use App\Models\Hotel;
use App\Models\Evenement;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\ReservationHotel;
use App\Http\Controllers\Controller;
use App\Models\ReservationEvenement;
use Illuminate\Support\Facades\Auth;
use App\Models\ReservationRestaurant;

class ReservationController extends Controller
{
    public function reserveRestaurant(Request $request, $id)
    {
        $this->validate($request, [
            'nombre'   => 'required',
            'heure'   => 'required',
            'date' => 'required',
        ]);
        $restaurant = Restaurant::find($id);
        if ($restaurant) {
            $resevation_restaurant = new ReservationRestaurant();
            $resevation_restaurant->user_id = Auth::guard('web')->user()->id;
            $resevation_restaurant->date = $request->date;
            $resevation_restaurant->heure = $request->heure;
            $resevation_restaurant->restaurant_id = $restaurant->id;
            $resevation_restaurant->nombre = $request->nombre;
            $resevation_restaurant->prix = $restaurant->prix_table * $request->nombre ;
            $resevation_restaurant->save();
            return redirect()->route('home')->with('success', 'Reservation avec Success');
        } else {
            return redirect()->back();
        }
    }
    public function reservehotel(Request $request, $id)
    {
        $this->validate($request, [
            'nombre_chambre'   => 'required',
            'date_arrive'   => 'required|date',
    'date_migration' => 'required|date|after_or_equal:' . $request->input('date_arrive'),

         ]);
        $hotel = Hotel::find($id);
        if ($hotel) {
            $reservation_hotel = new ReservationHotel();
            $reservation_hotel->user_id = Auth::guard('web')->user()->id;
            $reservation_hotel->date_arrive = $request->date_arrive;
            $reservation_hotel->date_migration = $request->date_migration;
            $reservation_hotel->hotel_id = $hotel->id;
            $reservation_hotel->nombre_chambre = $request->nombre_chambre;
            $reservation_hotel->prix = $hotel->prix_chambre * $request->nombre_chambre ;
            $reservation_hotel->save();
            return redirect()->route('home')->with('success', 'Reservation Hotel avec Success');
        } else {
            return redirect()->back();
        }
    }
    public function reserveevent(Request $request, $id)
    {

        $evenemet = Evenement::find($id);
        if ($evenemet) {
            $reservation_evenet = new ReservationEvenement();
            $reservation_evenet->user_id = Auth::guard('web')->user()->id;


            $reservation_evenet->evenement_id = $evenemet->id;
            $reservation_evenet->prix = $evenemet->prix_reservation ;
            $reservation_evenet->save();
            return redirect()->route('home')->with('success', 'Demande de Participation au evenement avec Success');
        } else {
            return redirect()->back();
        }
    }
    public function mesResRestau()
    {
        $user = Auth::guard('web')->user();
        $reservations = ReservationRestaurant::where('user_id', $user->id)
        ->orderBy('created_at', 'Desc')->paginate(10);
        return view('User.Reservation-restaurants', compact('reservations'));
    }
    public function mesResHotel()
    {
        $user = Auth::guard('web')->user();
        $reservations = ReservationHotel::where('user_id', $user->id)
        ->orderBy('created_at', 'Desc')->paginate(10);
        return view('User.Rser-Hotels', compact('reservations'));
    }
    public function mesResEven()
    {
        $user = Auth::guard('web')->user();
        $reservations = ReservationEvenement::where('user_id', $user->id)
        ->orderBy('created_at', 'Desc')->paginate(10);
        return view('User.Rser-evenements', compact('reservations'));
    }

}
