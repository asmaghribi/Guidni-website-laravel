<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\RestaurantTrait;
use App\Traits\StorageTrait;
class RestaurantController extends Controller
{
     use RestaurantTrait;
     use StorageTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = $this->getRestaurantPaginted(10);
        return view('Admin.Components.restaurants.list',compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $restaurant=$this->getRestaurantById($id);
        if ($restaurant) {
          return view('Admin.Components.restaurants.edit',compact('restaurant'));
        }else{
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated=$this->updateStuatsRestaurant($id);
        if ($updated) {
            return redirect()->back()->with('success', 'Traietment Avec Success');
        } else {
            return redirect()->back()->with('erreurs', 'Echec De Traitement');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $restaurant=$this->getRestaurantById($id);
        $delete_image= $this->deletePublicFile($restaurant->images);
         $deleted = $this->deleteRestaurant($id);
         if ($deleted) {
             return redirect()->back()->with('success', 'Traietment Avec Success');
         } else {
             return redirect()->back()->with('erreurs', 'Echec De Traitement');

         }
    }
}
