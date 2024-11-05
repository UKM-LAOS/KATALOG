<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'view admin dashboard',
            'manage admin products',
            'manage admin stores',
            'reset store password',
            'update admin profile',
            'delete products',
            'change product display',

            'view toko dashboard',
            'view toko profile',
            'create product',
            'search products',
            'filter products',
            'view contact page',
            'view guest products',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $roles = [
            'Admin' => [
                'view admin dashboard',
                'manage admin products',
                'manage admin stores',
                'reset store password',
                'update admin profile',
                'delete products',
                'change product display',
            ],
            'Toko' => [
                'view toko dashboard',
                'view toko profile',
                'create product',
                'search products',
                'filter products',
                'view contact page',
                'view guest products',
            ],
        ];

        foreach ($roles as $roleName => $rolePermissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            foreach ($rolePermissions as $permissionName) {
                $permission = Permission::where('name', $permissionName)->first();
                if ($permission) {
                    $role->givePermissionTo($permission);
                }
            }
        }
    }
}
