<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'ville_id', 'supplier_id', 'adresse', 'description', 'latitude', 'longitude', 'prix_table', 'status','images'];

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
        return $this->hasMany(ReservationRestaurant::class);
    }
    
}
