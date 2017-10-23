<?php

namespace App\Container\Sicepla\Src;

use Illuminate\Database\Eloquent\Model;

class Formatos extends Model
{
    protected $table = "TBL_Formatos";
    protected $primarykey = "id";
    protected $fillable = ['nombre','descripcion','url'];
}
