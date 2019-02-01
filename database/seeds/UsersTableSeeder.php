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
        \App\User::create([
            'name'=> 'Ivan',
            'app'=> 'Leon',
            'apm'=> 'Robles',
            'email'=> 'ejemplo@gmail.com',
            'password'=> 'ejemplo'
        ]);

        \App\User::create([
            'name'=> 'Guillermo',
            'app'=> 'Rios',
            'apm'=> 'Silva',
            'email'=> 'willstarxey@gmail.com',
            'password'=> '$2y$10$G2Nhh2FuvfQoB3tvMEadBO2R/5Qi6kVUi/0nSqqnMdsZon51jO0CC'
        ]);

        factory(App\User::class,20)->create();

        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' =>'all-access'
        ]);


    }
}
