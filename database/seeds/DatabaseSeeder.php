<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(RolTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AspirantTableSeeder::class);
        $this->call(KnowledgementAreaTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
    }
}
