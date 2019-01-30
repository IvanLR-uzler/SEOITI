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

        factory(App\User::class,20)->create();

        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' =>'all-access'
        ]);


    }
}
