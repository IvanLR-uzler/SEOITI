<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'  => 'Navegar Usuarios',
            'slug'  => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema'
        ]);

        Permission::create([
            'name'  => 'Ver Usuario',
            'slug'  => 'users.show',
            'description' => 'Ver en detalle cada usuario del sistema'
        ]);

        Permission::create([
            'name'  => 'Editar Usuario',
            'slug'  => 'users.edit',
            'description' => 'Edita un usuario'
        ]);

        Permission::create([
            'name'  => 'Eliminar un usuario',
            'slug'  => 'users.destroy',
            'description' => 'Elimina un usuario'
        ]);

        //Roles------------------------------------------------------------------
        Permission::create([
            'name'  => 'Navegar roles',
            'slug'  => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema'
        ]);

        Permission::create([
            'name'  => 'Registrar rol',
            'slug'  => 'roles.create',
            'description' => 'Registrar un rol nuevo'
        ]);

        Permission::create([
            'name'  => 'Ver rol',
            'slug'  => 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema'
        ]);

        Permission::create([
            'name'  => 'Editar rol',
            'slug'  => 'roles.edit',
            'description' => 'Edita un rol'
        ]);

        Permission::create([
            'name'  => 'Eliminar un rol',
            'slug'  => 'roles.destroy',
            'description' => 'Elimina un usuario'
        ]);

        //Questions------------------------------------------------------------------
        Permission::create([
            'name'  => 'Navegar Preguntas',
            'slug'  => 'questions.index',
            'description' => 'Lista y navega todas las preguntas del sistema'
        ]);

        Permission::create([
            'name'  => 'Registrar pregunta',
            'slug'  => 'questions.create',
            'description' => 'Registrar una pregunta nueva'
        ]);

        Permission::create([
            'name'  => 'Ver pregunta',
            'slug'  => 'questions.show',
            'description' => 'Ver en detalle cada pregunta del sistema'
        ]);

        Permission::create([
            'name'  => 'Editar pregunta',
            'slug'  => 'questions.edit',
            'description' => 'Edita una pregunta'
        ]);

        Permission::create([
            'name'  => 'Eliminar una pregunta',
            'slug'  => 'questions.destroy',
            'description' => 'Elimina una pregunta'
        ]);

        //Examn------------------------------------------------------------------
        Permission::create([
            'name'  => 'Navegar examenes',
            'slug'  => 'examns.index',
            'description' => 'Lista y navega todos los examenes del sistema'
        ]);

        Permission::create([
            'name'  => 'Registrar examen',
            'slug'  => 'examns.create',
            'description' => 'Registrar un examen nuevo'
        ]);

        Permission::create([
            'name'  => 'Ver examen',
            'slug'  => 'examns.show',
            'description' => 'Ver en detalle cada examen del sistema'
        ]);

        Permission::create([
            'name'  => 'Editar examen',
            'slug'  => 'examns.edit',
            'description' => 'Edita un examen'
        ]);

        Permission::create([
            'name'  => 'Eliminar un examen',
            'slug'  => 'examns.destroy',
            'description' => 'Elimina un examen'
        ]);

        //KnowledgementArea------------------------------------------------------------------
        Permission::create([
            'name'  => 'Navegar areas del conocimiento',
            'slug'  => 'knowledgementareas.index',
            'description' => 'Lista y navega todas las áreas del conocimiento del sistema'
        ]);

        Permission::create([
            'name'  => 'Registrar area del conocimiento',
            'slug'  => 'knowledgementareas.create',
            'description' => 'Registrar un area del conocimiento nuevo'
        ]);

        Permission::create([
            'name'  => 'Ver area del conocimiento',
            'slug'  => 'knowledgementareas.show',
            'description' => 'Ver en detalle cada area del conocimiento del sistema'
        ]);

        Permission::create([
            'name'  => 'Editar area del conocimiento',
            'slug'  => 'knowledgementareas.edit',
            'description' => 'Edita un area del conocimiento'
        ]);

        Permission::create([
            'name'  => 'Eliminar un area del conocimiento',
            'slug'  => 'knowledgementareas.destroy',
            'description' => 'Elimina un area del conocimiento'
        ]);

        //Aspirant------------------------------------------------------------------
        Permission::create([
            'name'  => 'Registro de aspirante',
            'slug'  => 'aspirants.create',
            'description' => 'Registro de aspirante'
        ]);
        
        Permission::create([
            'name'  => 'Inicio de aspirante',
            'slug'  => 'aspirants.index',
            'description' => 'Muestra los datos del aspirante'
        ]);

        Permission::create([
            'name'  => 'Ver aspirante',
            'slug'  => 'aspirants.show',
            'description' => 'Ver en detalle cada aspirante del sistema'
        ]);

        Permission::create([
            'name'  => 'Editar aspirante',
            'slug'  => 'aspirants.edit',
            'description' => 'Edita un aspirante'
        ]);

        Permission::create([
            'name'  => 'Eliminar un aspirante',
            'slug'  => 'aspirants.destroy',
            'description' => 'Elimina un aspirante'
        ]);
    }
}
