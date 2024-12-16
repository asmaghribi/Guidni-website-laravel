<?php

namespace App\Traits;

use App\Models\Supplier;

trait SupplierTrait
{
    public function getAllSupplierPaginted($perpage)
    {
        return  Supplier::paginate($perpage);
    }
    public function getAllSupplierByID($id)
    {
        return  Supplier::find($id);
    }
    public function UpdateSupplierStatus($id)
    {
        $supplier = Supplier::find($id);
        if ($supplier) {
            if ($supplier->status) {
                $supplier->status = false;
            } else {
                $supplier->status = true;
            }
            $supplier->save();
            return true;
        }
        return false;


    }
}
