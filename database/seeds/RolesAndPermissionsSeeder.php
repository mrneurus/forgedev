<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
         // create permissions users
         Permission::create(['name' => 'create user']);
         Permission::create(['name' => 'read users']);
         Permission::create(['name' => 'update users']);
         Permission::create(['name' => 'delete users']);

        // create permissions role
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'read roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        // create permissions 
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'read permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);
        
        $role = Role::create(['name' => 'administrador']);
        $role->givePermissionTo(Permission::all());


        // this can be done as separate statements
        $role = Role::create(['name' => 'vendedor']);
        $role->givePermissionTo('update users');
    }
}