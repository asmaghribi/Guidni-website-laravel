<?php

namespace App\Traits;

use App\Models\User;

trait UserTrait
{
    public function getUserPaginted($perpage)
    {
        return  User::paginate($perpage);
    }

}
