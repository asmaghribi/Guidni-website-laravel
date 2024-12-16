<?php

namespace App\Traits;

use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

trait RestaurantTrait
{
    public function getMyrestaurants()
    {
        return Restaurant::where('supplier_id', Auth::guard('supplier')->user()->id)->OrderBy('created_at', 'desc')->get();
    }
    public function getMyrestaurantPaginted($perpage)
    {
        return Restaurant::where('supplier_id', Auth::guard('supplier')->user()->id)
        ->OrderBy('created_at', 'desc')->paginate($perpage);
    }
    public function getRestaurantPaginted($perpage)
    {
        return Restaurant::OrderBy('created_at', 'desc')->paginate($perpage);
    }


    public function saveRestaurant($name, $ville_id, $adresse, $description, $prix_table, $images)
    {
        $restaurant = new Restaurant();
        $restaurant->name = $name;
        $restaurant->ville_id = $ville_id;
        $restaurant->supplier_id = Auth::guard('supplier')->user()->id;
        $restaurant->adresse = $adresse;
        $restaurant->description = $description;
        $restaurant->prix_table = $prix_table;
        $restaurant->images = $images;
        $restaurant->save();
        return $restaurant;
    }
    public function getRestaurantById($id)
    {
        return Restaurant::find($id) ?? null;
    }
    public function getMyRestaurantById($id)
    {
        return Restaurant::where('supplier_id',Auth::guard('supplier')->user()->id)->first() ?? null;
    }
    public function deleteRestaurant($id)
    {
        $resturant = $this->getRestaurantById($id);
        if ($resturant) {
            $resturant->delete();
            return true;
        }
        return false;
    }
    public function updateRestaurant($id,$name, $ville_id, $adresse, $description, $prix_table, $images)
    {
        $restaurant = $this->getRestaurantById($id);
        $restaurant->name = $name;
        $restaurant->ville_id = $ville_id;
        $restaurant->supplier_id = Auth::guard('supplier')->user()->id;
        $restaurant->adresse = $adresse;
        $restaurant->description = $description;
        $restaurant->prix_table = $prix_table;
        $restaurant->images = $images;
        $restaurant->save();
        return $restaurant;
    }
    
    public function updateStuatsRestaurant($id){
        $restaurant = $this->getRestaurantById($id);
        if ($restaurant) {
            if ($restaurant->status) {
                $restaurant->status = false;
            } else {
                $restaurant->status = true;
            }
            $restaurant->save();
            return true;
        }
        return false;
    }

}
