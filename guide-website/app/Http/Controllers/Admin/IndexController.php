<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/* App\Http\Controllers\AdminIndexController */
use App\Traits\VilleTrait;
class IndexController extends Controller
{
    use VilleTrait;
   public function index(){
    $villes=$this->getAllVill();
    return view('Admin.Components.index',compact('villes'));
   }
}
