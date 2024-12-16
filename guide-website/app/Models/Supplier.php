<?php

namespace App\Models;

use App\Models\Hotel;
use App\Models\Evenement;
use App\Models\Restaurant;
use App\Models\ReservationHotel;
use App\Models\ReservationEvenement;
use App\Models\ReservationRestaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Supplier extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'adresse', 'password', 'status','fax'];
    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }
    public function reservationRestaurants()
    {
        return $this->hasManyThrough(
            ReservationRestaurant::class,
            Restaurant::class,
            'supplier_id', // Clé étrangère dans la table des restaurants
            'restaurant_id' // Clé étrangère dans la table des réservations
        );
    }
    public function reservationEvenements()
    {
        return $this->hasManyThrough(
            ReservationEvenement::class,
            Evenement::class,
            'supplier_id',
            'evenement_id'
        );
    }
    public function reservationHotels()
    {
        return $this->hasManyThrough(
            ReservationHotel::class,
            Hotel::class,
            'supplier_id',
            'hotel_id'
        );
    }
}
