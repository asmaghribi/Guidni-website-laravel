<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\SupplierTrait;

class FournisseurController extends Controller
{
    use SupplierTrait;
    public function index()
    {
        $fournisseurs = $this->getAllSupplierPaginted(10);
        return view('Admin.Components.fournisseurs.list', compact('fournisseurs'));
    }
    public function UpdateStatus($id)
    {
        $update = $this->UpdateSupplierStatus($id);
        if ($update) {
            return redirect()->back()->with('success', 'Traitement avec Success');
        } else {
            return redirect()->back()->with('echec', 'Echec De Traitement');

        }

    }

}
