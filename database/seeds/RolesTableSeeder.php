<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TBL_Roles')->insert([
            [
                'nombre' => 'Super Administrador'
            ],
            [
                'nombre' => 'Comandante de Unidad'
            ],
            [
                'nombre' => 'Ayudante'
            ],
            [
                'nombre' => 'Jefe de Dependencia'
            ]
        ]);
    }
}
