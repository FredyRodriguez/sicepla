<?php

namespace App\Container\Sicepla\Src;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = "TBL_Departamento";
    protected $primarykey = "PK_id";
    protected $fillable = ['nombre','descripcion'];
}