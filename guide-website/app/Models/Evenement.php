<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'date_evenement', 'ville_id', 'supplier_id', 'adresse', 'description', 'latitude', 'longitude', 'status', 'prix_reservation','images'];
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
        return $this->hasMany(ReservationEvenement::class);
    }
}
