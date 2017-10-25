<?php

namespace App\Container\Sicepla\Src;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = "TBL_Departamento";
    protected $primarykey = "id";
    protected $fillable = ['nombre','descripcion'];

    public function usuario(){
        return $this->hasMany(User::class,'FK_DepartamentoId','id');
    }

    public function actividad(){
        return $this->hasMany(Actividad::class,'FK_DepartamentoId','id');
    }

    public function activtemporal(){
        return $this->hasMany(ActividadTemporal::class,'FK_DepartamentoId','id');
    }
}
