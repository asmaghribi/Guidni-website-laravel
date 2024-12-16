<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/* App\Http\Controllers\Supplier\IndexController */
class IndexController extends Controller
{

    public function SupplierNotActive(){

        return view('Website.Components.suppliernotActive');
    }
    public function index(){
        return view('Supplier.Components.index');
    }
}
