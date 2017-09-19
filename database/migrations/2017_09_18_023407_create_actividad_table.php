<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Actividad', function (Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->enum('tipo_entrega',['Dia','Diario','Semanal','Mensual'])->nullable();
            $table->enum('tipo_dia',['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo']);
            $table->integer('Num_Dia')->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();            
            $table->string('observacion')->nullable();
            $table->integer('FK_DepartamentoId')->unsigned();
            $table->timestamps();

            $table->foreign('FK_DepartamentoId')->references('id')
            ->on('TBL_Departamento')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TBL_Actividad');
    }
}
