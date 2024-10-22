<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tokos')->insert([
            [
                'namatoko' => 'Toko Elektronik ABC',
                'iduser' => 2,  // Sesuaikan dengan id user yang ada
                'linktoko' => 'https://example.com/toko-elektronik-abc',
                'deskripsitoko' => 'Toko Elektronik ABC menyediakan berbagai kebutuhan elektronik.',
                'tglgabung' => now(),
                'fototoko' => 'toko-elektronik.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namatoko' => 'Toko Gadget XYZ',
                'iduser' => 2,  // Sesuaikan dengan id user yang ada
                'linktoko' => 'https://example.com/toko-gadget-xyz',
                'deskripsitoko' => 'Toko Gadget XYZ adalah pusat penjualan smartphone dan gadget terbaru.',
                'tglgabung' => now(),
                'fototoko' => 'toko-gadget.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namatoko' => 'Toko Rumah Tangga QWE',
                'iduser' => 2,  // Sesuaikan dengan id user yang ada
                'linktoko' => 'https://example.com/toko-rumah-tangga-qwe',
                'deskripsitoko' => 'Toko Rumah Tangga QWE menyediakan berbagai peralatan rumah tangga berkualitas.',
                'tglgabung' => now(),
                'fototoko' => 'toko-rumah-tangga.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
