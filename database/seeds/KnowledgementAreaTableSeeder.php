<?php

use Illuminate\Database\Seeder;

class KnowledgementAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\KnowledgementArea::class,80)->create();
    }
}
