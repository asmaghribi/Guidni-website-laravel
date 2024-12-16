<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationRestaurant extends Model
{
    use HasFactory;
    protected $fillable = ['restaurant_id', 'user_id', 'nombre', 'heure', 'date', 'prix', 'status'];


    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
