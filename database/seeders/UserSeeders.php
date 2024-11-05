<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $tokoRole = Role::firstOrCreate(['name' => 'Toko']);

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

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin3@gmail.com',
            'role' => 'Admin',
            'password' => bcrypt('123'),
        ]);

        $admin->assignRole($adminRole);

        $admin->givePermissionTo([
            'view admin dashboard',
            'manage admin products',
            'manage admin stores',
            'reset store password',
            'update admin profile',
            'delete products',
            'change product display'
        ]);

        $toko = User::create([
            'name' => 'toko',
            'email' => 'toko@gmail.com',
            "role" => 'Toko',
            'password' => bcrypt('123'),
        ]);

        $toko->assignRole($tokoRole);

        $toko->givePermissionTo([
            'view toko dashboard',
            'view toko profile',
            'create product',
            'search products',
            'filter products',
            'view contact page',
            'view guest products'
        ]);

        $adminRole->givePermissionTo([
            'view admin dashboard',
            'manage admin products',
            'manage admin stores',
            'reset store password',
            'update admin profile',
            'delete products',
            'change product display'
        ]);

        $tokoRole->givePermissionTo([
            'view toko dashboard',
            'view toko profile',
            'create product',
            'search products',
            'filter products',
            'view contact page',
            'view guest products'
        ]);
    }
}
