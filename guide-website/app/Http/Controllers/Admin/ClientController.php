<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\UserTrait;
class ClientController extends Controller
{   use UserTrait;
    public function index(){
      $clients=$this->getUserPaginted(10);
        return view('Admin.Components.clients.list',compact('clients'));
    }
}
