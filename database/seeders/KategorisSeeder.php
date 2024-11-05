<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->insert([
            [
                'kategori' => 'Elektronik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Smartphone',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Peralatan Rumah Tangga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
  
        ]);
    }
}
