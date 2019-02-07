<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Question::create([
            'context' => '¿QUÉ VIOLACIÓN DE SEGURIDAD CAUSARÍA LA MAYOR CANTIDAD DE DAÑO A LA VIDA DE UN USUARIO DOMÉSTICO?',
            'ansA' => 'Spyware, que permite el correo electrónico no deseado',
            'ansB' => 'Denegación de servicio del servidor de correo electrónico',
            'ansC' => 'Captura de datos personales, que permite el robo de identidad',
            'ansD' => 'Reproducción de gusanos y virus en la computadora',
            'correctAns' => 'C',
            'reactive' => '10'
        ]);
    }
}

