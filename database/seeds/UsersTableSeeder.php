<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' =>'all-access'

        ]);

        \App\User::create([
            'name'=> 'Ivan',
            'app'=> 'Leon',
            'apm'=> 'Robles',
            'email'=> 'ejemplo@gmail.com',
            'password'=>bcrypt('123456'),

        ]);

        \App\User::create([
            'name'=> 'Guillermo',
            'app'=> 'Rios',
            'apm'=> 'Silva',
            'email'=> 'willstarxey@gmail.com',
            'password'=> bcrypt('ejemplo')
        ]);

        factory(App\User::class,20)->create();
    }
}
