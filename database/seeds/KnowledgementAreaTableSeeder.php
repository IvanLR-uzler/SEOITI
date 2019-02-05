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
        \App\KnowledgementArea::create([
            'name'=>'informatica',
            'description'=>'Todo Sobre informatica'
        ]);
    }
}
