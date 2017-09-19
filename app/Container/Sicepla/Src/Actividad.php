<?php

namespace App\Container\Sicepla\Src;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table =  "TBL_Actividad";
    protected $primarykey = "id";
    protected $fillable = ['nombre','fecha','hora','observacion','FK_DepartamentoId'];

    public function departamento(){
        return $this->belongsTo(Departamento::class,'FK_DepartamentoId','id');
    }
}
