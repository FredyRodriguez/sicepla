<?php

namespace App\Container\Sicepla\Src;

use Illuminate\Database\Eloquent\Model;

class ActividadTemporal extends Model
{
    protected $table = "TBL_ActivTemporal";
    protected $primaryKey = "id";
    protected $fillable = ['nombre','observacion','FK_DepartamentoId','tipo_entrega','fecha','hora','tipo_dia','Num_Dia','url'];

    public function departamento(){
        return $this->belongsTo(Departamento::class,'FK_DepartamentoId','id');
    }
}
