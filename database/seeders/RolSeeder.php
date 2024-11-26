<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles
        $admin = Role::create(['name' => 'ADMINISTRADOR']);
        $user = Role::create(['name' => 'USER']);

        // Crear permisos
        $permissions = [
            'Panel Admin',
            'Panel User',
            '-',
        ];

         // Asignar permisos a roles
         foreach ($permissions as $permissionName) {
            $permission = Permission::create(['name' => $permissionName]);

            // Asignar permisos a roles específicos
            if (in_array($permissionName, [
                'Panel Admin',
                'Panel User',
                '-',
            ])) {
                $permission->syncRoles([$admin]); // Asignar al rol ADMINISTRADOR
            }
            
        }
    }
}
