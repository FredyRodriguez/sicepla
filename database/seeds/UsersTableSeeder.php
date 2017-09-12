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
                'FK_DepartamentoId' => '1',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Paisa',
                'email' => 'paisa@mail.com',
                'FK_DepartamentoId' => '2',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Fredo',
                'email' => 'fredo@joya.joya',
                'FK_DepartamentoId' => '3',
                'password' => bcrypt('12345')
            ]
        ]);
    }
}
