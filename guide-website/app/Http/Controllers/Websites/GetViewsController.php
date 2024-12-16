<?php

namespace App\Http\Controllers\Websites;

use App\Models\Hotel;
use App\Models\Evenement;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetViewsController extends Controller
{
    public function index(){
        $hotels=Hotel::take(6)->orderBy('created_at','Desc')
        ->where('status',true)->get();
        $restaurants=Restaurant::take(6)->orderBy('created_at','Desc')
        ->where('status',true)->get();
        $events=Evenement::take(3)->orderBy('created_at','Desc')
        ->where('status',true)->get();
        return  view('Website.Components.index',compact('restaurants','hotels','events'));
    }
    public function showrestaurant($id){
        $restaurant=Restaurant::find($id);
        if($restaurant){
            return  view('Website.Components.details_restaurants',compact('restaurant'));

        }
        else{
            return redirect()->back();
        }
    }
    public function showrevent($id){
        $event=Evenement::find($id);
        if($event){
            return  view('Website.Components.details_events',compact('event'));

        }
        else{
            return redirect()->back();
        }
    }

    public function about(){
        return  view('Website.Components.about');
    }
    public function event(){
        return  view('Website.Components.event');
    }
    public function hotel(){

        return  view('Website.Components.hotel');
    }
    public function showrhotel($id){
        $hotel=Hotel::find($id);
        if ($hotel) {
            return  view('Website.Components.details_hotels',compact('hotel'));
        }else{
            return redirect()->back();
        }
    }

    public function restaurant(){
        return  view('Website.Components.restaurant');
    }
    public function contact(){
        return  view('Website.Components.contact');
    }

}
