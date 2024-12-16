<?php

namespace App\Traits;

use App\Models\Ville;

trait VilleTrait
{

public function getAllVill(){
return Ville::all();
}
public function getAllVillePaginted($perpage){
return Ville::paginate($perpage);
}


}
