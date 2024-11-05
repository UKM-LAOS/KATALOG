<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $UserData= [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                "role" => 'admin',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@gmail.com',
                "role" => 'admin',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'toko',
                'email' => 'toko@gmail.com',
                "role" => 'toko',
                'password' => bcrypt('123'),
            ],
        ];

       foreach ($UserData as $key => $val) {
            User::create($val);

        }
    }
}
