<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Formatos', function (Blueprint $table){
            $table->increments('id');
            $table->string('url');
            $table->string('nombre')->unique();
            $table->string('descripcion')->nullable();            
            $table->integer('FK_Usuarios')->unsigned();

            $table->foreign('FK_Usuarios')->references('PK_id')
            ->on('TBL_Usuarios')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TBL_Formatos');
    }
}
