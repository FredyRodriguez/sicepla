<?php

use Illuminate\Database\Seeder;

class DeptoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TBL_Departamento')->insert([
            [
                'nombre' => 'Ayudantia',
                'descripcion' => 'nueva1',
            ],
            [
                'nombre' => 'Gestion Documental',
                'descripcion' => 'nueva2'
            ],
            [
                'nombre' => 'Contrainteligencia',
                'descripcion' => 'nueva3'
            ],
            [
                'nombre' => 'Desarrollo Humano',
                'descripcion' => 'nueva2'
            ],
            [
                'nombre' => 'Sepse',
                'descripcion' => 'nueva2'
            ],
            [
                'nombre' => 'Campaña Programa de Higiene y Seguridad Industrial',
                'descripcion' => 'nueva2'
            ],
            [
                'nombre' => 'Investigacion de Incidentes',
                'descripcion' => 'nueva2'
            ],
            [
                'nombre' => 'Campaña Procedimiento Para Proteccion Contra "Caidas en Trabajo en Alturas"',
                'descripcion' => 'nueva2'
            ],
            [
                'nombre' => 'Campaña Programa de Seguridad Operacional',
                'descripcion' => 'nueva2'
            ],
        ]);
    }
}
