<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TBL_Usuarios')->insert([
            [
                'name' => 'Code Freestyle',
                'email' => 'root@app.com',
                'password' => bcrypt('12345'),
                'FK_RolesId' => '1',
                'FK_DepartamentoId' => null
            ],
            [
                'name' => 'Paisa',
                'email' => 'paisa@mail.com',
                'password' => bcrypt('12345'),
                'FK_RolesId' => '2',
                'FK_DepartamentoId' => null
            ],
            [
                'name' => 'Fredo',
                'email' => 'fredo@joya.joya',
                'password' => bcrypt('12345'),
                'FK_RolesId' => '3',
                'FK_DepartamentoId' => null
            ],
            [
                'name' => 'Efrain',
                'email' => 'efrain@gmail.com',                
                'password' => bcrypt('12345'),
                'FK_RolesId' => '4',
                'FK_DepartamentoId' => '1'                
            ],
            [
                'name' => 'Stevenson',
                'email' => 'stevenson@gmail.com',
                'password' => bcrypt('12345'),
                'FK_RolesId' => '4',                
                'FK_DepartamentoId' => '2'
            ],
            [
                'name' => 'hector',
                'email' => 'hector@gmail.com',
                'password' => bcrypt('12345'),
                'FK_RolesId' => '4',
                'FK_DepartamentoId' => '3'
            ]
        ]);
    }
}
