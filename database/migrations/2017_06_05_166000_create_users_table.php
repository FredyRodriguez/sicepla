<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Usuarios', function (Blueprint $table) {
            $table->increments('PK_id');
            $table->string('name');
            $table->string('telefono')->nullable();
            $table->integer('documento')->nullable();
            $table->string('direccion')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('foto')->nullable();  
            $table->integer('FK_RolesId')->unsigned();
            $table->integer('FK_DepartamentoId')->unsigned()->nullable();
                    
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('FK_RolesId')->references('id')
            ->on('TBL_Roles')->onUpdate('cascade');

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
        Schema::dropIfExists('TBL_Usuarios');
    }
}
