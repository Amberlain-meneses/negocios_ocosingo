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
        //superadmin
        $permissions_array = [];
       
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

         //permisos para módulo categorías
         array_push($permissions_array, Permission::create(['name' => 'categories.index']));
         array_push($permissions_array, Permission::create(['name' => 'categories.create']));
         array_push($permissions_array, Permission::create(['name' => 'categories.edit']));
         array_push($permissions_array, Permission::create(['name' => 'categories.show']));
         array_push($permissions_array, Permission::create(['name' => 'categories.destroy']));

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


       
        //cliente regular
        $permissions_array_seller = [];

        array_push($permissions_array_seller, 'businesses.create');
        array_push($permissions_array_seller, 'businesses.edit');
        array_push($permissions_array_seller, 'businesses.show');

        array_push($permissions_array_seller, 'products.index');
        array_push($permissions_array_seller, 'products.create');
        array_push($permissions_array_seller, 'products.edit');
        array_push($permissions_array_seller, 'products.show');
        array_push($permissions_array_seller, 'products.destroy');

        array_push($permissions_array_seller, 'categories.create');

        //se crea rol de vendedor
        $userSeller = Role::create(['name' => 'seller']);

        //se otorgan los permisos anteriores al rol de
        $userSeller->syncPermissions($permissions_array_seller);
    }
}
