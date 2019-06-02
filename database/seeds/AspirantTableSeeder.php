<?php

use Illuminate\Database\Seeder;

class AspirantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \App\Aspirant::create([
            'name'=>'ivan',
            'app'=>'leon',
            'apm'=>'robles',
            'age'=>22,
            'genre'=>'man',
            'direction'=>'primero de mayo',
            'email'=>'aaa@aaa.com',
            'bornDate'=>'1996-04-01',
            'cellphone'=>0000000000,
            'password'=>bcrypt('123456')
        ]);

    }
}
