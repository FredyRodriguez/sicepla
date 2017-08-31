<?php

namespace App\Container\Sicepla\Src;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = "TBL_Departamento";
    protected $primarykey = "id";
    protected $fillable = ['nombre','descripcion'];
}
