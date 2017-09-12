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
                'nombre' => 'c1',
                'descripcion' => 'nueva1',
            ],
            [
                'nombre' => 'c2',
                'descripcion' => 'nueva2'
            ],
            [
                'nombre' => 'c3',
                'descripcion' => 'nueva3'
            ]
        ]);
    }
}
