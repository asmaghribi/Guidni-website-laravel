<?php

namespace App\Http\Controllers\Supplier;

use App\Traits\VilleTrait;
use App\Traits\StorageTrait;
use Illuminate\Http\Request;
use App\Traits\RestaurantTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    use RestaurantTrait;
    use VilleTrait;
    use StorageTrait;
    public function index()
    {
        $restaurants = $this->getMyrestaurantPaginted(10);
        return view('Supplier.Components.restaurants.list', compact('restaurants'));
    }
    public function create()
    {
        $villes = $this->getAllVill();
        return view('Supplier.Components.restaurants.create', compact('villes'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'ville_id' => 'exists:villes,id',
            'images' => 'image',
            'prix_table' => 'numeric|required',
        ]);
        if ($request->images) {
            $image_path = $this->storePublicFile('Uploads/Restaurants/', $request->images);

        } else {
            $image_path = null;
        }
        $this->saveRestaurant($request->name, $request->ville_id, $request->adresse, $request->description, $request->prix_table, $image_path);
        return redirect()->route('supplier.restaurants')->with('success', 'Traietment Avec Success');

    }
    public function delete($id)
    {
        $restaurant=$this->getRestaurantById($id);
       $delete_image= $this->deletePublicFile($restaurant->images);
        $deleted = $this->deleteRestaurant($id);
        if ($deleted) {
            return redirect()->route('supplier.restaurants')->with('success', 'Traietment Avec Success');
        } else {
            return redirect()->route('supplier.restaurants')->with('erreurs', 'Echec De Traitement');

        }
    }
    public function edit($id){
        $restaurant=$this->getMyRestaurantById($id);
        if ($restaurant) {
          return view('Supplier.Components.restaurants.edit',compact('restaurant'));
        }else{
            return redirect()->back();
        }
    }
    public function update($id,Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'ville_id' => 'exists:villes,id',
            'images' => 'image',
            'prix_table' => 'numeric|required',
        ]);
        $restaurant=$this->getRestaurantById($id);
        if ($restaurant) {
        if ($request->images) {
            if ($restaurant->images) {
                $image_path = $this->storeOrUpdatePublicFile('Uploads/Restaurants/',$restaurant->images, $request->images);
            }
            else{
                $image_path = $this->storePublicFile('Uploads/Restaurants/', $request->images);

            }
        } else {
            $image_path = null;
        }
        $this->updateRestaurant($id,$request->name, $request->ville_id, $request->adresse, $request->description, $request->prix_table, $image_path);
        return redirect()->route('supplier.restaurants')->with('success', 'Traietment Avec Success');
    }else{
        return redirect()->route('supplier.restaurants')->with('success', 'Traietment Avec Success');

    }
    }
}
