<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
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
}
