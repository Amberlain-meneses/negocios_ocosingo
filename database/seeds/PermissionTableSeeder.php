<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_array = [];
        $permissions_array_read = [];

        //permisos para módulo de roles
        array_push($permissions_array, Permission::create(['name' => 'roles.index']));
        array_push($permissions_array, Permission::create(['name' => 'roles.create']));
        array_push($permissions_array, Permission::create(['name' => 'roles.edit']));
        array_push($permissions_array, Permission::create(['name' => 'roles.show']));
        array_push($permissions_array, Permission::create(['name' => 'roles.destroy']));

        //permisos para módulo de usuarios
        array_push($permissions_array, Permission::create(['name' => 'users.index']));
        array_push($permissions_array, Permission::create(['name' => 'users.edit']));
        array_push($permissions_array, Permission::create(['name' => 'users.create']));
        array_push($permissions_array, Permission::create(['name' => 'users.show']));
        array_push($permissions_array, Permission::create(['name' => 'users.destroy']));

        //permisos para módulo productos
        array_push($permissions_array, Permission::create(['name' => 'products.index']));
        array_push($permissions_array, Permission::create(['name' => 'products.create']));
        array_push($permissions_array, Permission::create(['name' => 'products.edit']));
        array_push($permissions_array, Permission::create(['name' => 'products.show']));
        array_push($permissions_array, Permission::create(['name' => 'products.destroy']));

        //permisos para módulo negocios
        array_push($permissions_array, Permission::create(['name' => 'businesses.index']));
        array_push($permissions_array, Permission::create(['name' => 'businesses.create']));
        array_push($permissions_array, Permission::create(['name' => 'businesses.edit']));
        array_push($permissions_array, Permission::create(['name' => 'businesses.show']));
        array_push($permissions_array, Permission::create(['name' => 'businesses.destroy']));



        //se crea rol de superadministrador
        $superAdmin = Role::create(['name' => 'superAdmin']);
       
        //se otorgan los permisos anteriores al rol de superadministrador
        $superAdmin->syncPermissions($permissions_array);
       
        //se crea al usuario superadministrador
        $userSuperAdmin = User::create([
            'name' => 'Developer',
            'email' => 'dev@dev.com',
            'password' => Hash::make('dev@dev.com'),
        ]);

        //se asigna el rol al usuario
        $userSuperAdmin->assignRole('superAdmin');


        //usuario visitante

        array_push($permissions_array_read, 'products.index');
        array_push($permissions_array_read, 'products.show');

        array_push($permissions_array_read, 'businesses.index');
        array_push($permissions_array_read, 'businesses.show');


        
        //se crea rol de Usuario visitante
        $userVisited = Role::create(['name' => 'userVisited']);

        //se otorgan los permisos anteriores al rol de superadministrador
        $userVisited->syncPermissions($permissions_array_read);


        //se crea al usuario superadministrador
        $clientVisited = User::create([
            'name' => 'Visited',
            'email' => 'visited@visited.com',
            'password' => Hash::make('visited@visited.com'),
        ]);

        //se asigna el rol al usuario
        $clientVisited->assignRole('userVisited');

    }
}
