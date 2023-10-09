<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        Permission::create(['name' => 'ver-usuarios', 'guard_name' => 'admin']);
        Permission::create(['name' => 'crear-usuarios', 'guard_name' => 'admin']);
        Permission::create(['name' => 'editar-usuarios', 'guard_name' => 'admin']);
        Permission::create(['name' => 'borrar-usuarios', 'guard_name' => 'admin']);
    }
}
