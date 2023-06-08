<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Crear Cursos'
        ]);

        Permission::create([
            'name' => 'Leer Cursos'
        ]);

        Permission::create([
            'name' => 'Actualizar Cursos'
        ]);

        Permission::create([
            'name' => 'Eliminar Cursos'
        ]);

        Permission::create([
            'name' => 'Ver Dashboard'
        ]);

        Permission::create([
            'name' => 'Crear Role'
        ]);

        Permission::create([
            'name' => 'Listar Role'
        ]);

        Permission::create([
            'name' => 'Editar Role'
        ]);

        Permission::create([
            'name' => 'Eliminar Role'
        ]);

        Permission::create([
            'name' => 'Leer Usuarios'
        ]);

        Permission::create([
            'name' => 'Editar Usuarios'
        ]);
    }
}
