<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        $permissions = ['view admin dashboard', 'manage admin products', 'manage admin stores', 'manage admin profile', 'view products', 'logout', 'search products', 'view contact', 'filter products', 'view toko dashboard', 'add product', 'view toko profile'];

        foreach ($permissions as $permission) {
            $existingPermission = Permission::where('name', $permission)->first();
            if (!$existingPermission) {
                Permission::create(['name' => $permission]);
            }
        }

        $roles = [
            'Toko' => ['view products', 'logout', 'search products', 'view contact', 'filter products', 'view toko dashboard', 'add product', 'view toko profile'],
            'Admin' => ['view admin dashboard', 'manage admin products', 'manage admin stores', 'manage admin profile', 'logout'],
        ];

        foreach ($roles as $roleName => $rolePermissions) {
            $existingRole = Role::where('name', $roleName)->first();
            if (!$existingRole) {
                $role = Role::create(['name' => $roleName]);
                foreach ($rolePermissions as $permissionName) {
                    $permission = Permission::where('name', $permissionName)->first();
                    if ($permission) {
                        $role->givePermissionTo($permission);
                    }
                }
            }
        }
    }
}
