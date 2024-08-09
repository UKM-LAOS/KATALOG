<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        $permissions = [];

        foreach ($permissions as $permission) {
            $existingPermission = Permission::where('name', $permission)->first();
            if (!$existingPermission) {
                Permission::create(['name' => $permission]);
            }
        }

        $roles = [
            'Toko' => [],
            'Admin' => [],
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
