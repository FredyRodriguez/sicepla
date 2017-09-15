<?php

namespace App\Container\Sicepla\Src;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = "TBL_Roles";
    protected $primaryKey = "id";

    function usuarios(){
        return $this->hasMany(User::class,'FK_RolesId','id');
    }
}
