<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'etoile', 'ville_id', 'supplier_id', 'adresse', 'description', 'latitude', 'longitude', 'status', 'vue_mere', 'plage', 'piscine', 'prix_chambre','images'];

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function reservations()
    {
        return $this->hasMany(ReservationHotel::class);
    }
}
