<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
/* App\Http\Controllers\User\IndexController */
class IndexController extends Controller
{
   public function index(){
    return view('User.home');
   }
   public function updateInfo(Request $request){
    $this->validate($request, [
        'name'   => 'required',
        'email'   => 'required',
        'phone'   => 'required|numeric',
        'adresse' => 'required',
    ]);
    $user=Auth::guard('web')->user();
    $user->name=$request->name;
    $user->email=$request->email;
    $user->phone=$request->phone;
    $user->adresse=$request->adresse;
    $user->save();
    return redirect()->route('home')->with('success','Modification des données avec Success');

   }
   public function updatepassword(Request $request){
    $this->validate($request, [
        'password' => 'required|string|min:8|confirmed',
    ]);
    $user=Auth::guard('web')->user();
    $user->password=Hash::make($request->password) ;
    $user->save();
    return redirect()->route('home')->with('success','Modification Mot de passe avec Success');

   }
}
