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
                'iduser' => 1,  
                'linktoko' => 'https://example.com/toko-elektronik-abc',
                'deskripsitoko' => 'Toko Elektronik ABC menyediakan berbagai kebutuhan elektronik berkualitas tinggi, mulai dari peralatan rumah tangga, perangkat elektronik pribadi, hingga aksesoris terkini. Toko ini berkomitmen untuk memberikan produk dengan teknologi terbaru dan harga yang bersaing, serta menyediakan layanan pelanggan yang ramah dan profesional untuk memastikan pengalaman belanja yang memuaskan..',
                'tglgabung' => now(),
                'fototoko' => 'toko-elektronik.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namatoko' => 'Toko Gadget XYZ',
                'iduser' => 1,  
                'linktoko' => 'https://example.com/toko-gadget-xyz',
                'deskripsitoko' => 'Toko Gadget XYZ adalah pusat penjualan smartphone dan gadget terbaru yang selalu mengikuti tren teknologi terkini. Dengan koleksi produk dari merek-merek ternama, Toko Gadget XYZ menawarkan pilihan terbaik untuk kebutuhan perangkat elektronik modern. ',
                'tglgabung' => now(),
                'fototoko' => 'toko-gadget.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namatoko' => 'Toko Rumah Tangga QWE',
                'iduser' => 2,  
                'linktoko' => 'https://example.com/toko-rumah-tangga-qwe',
                'deskripsitoko' => 'Toko Rumah Tangga QWE menyediakan berbagai peralatan rumah tangga berkualitas untuk memenuhi kebutuhan sehari-hari. Dari peralatan dapur, peralatan kebersihan, hingga dekorasi rumah, Toko Rumah Tangga QWE selalu mengutamakan kualitas produk dan kepuasan pelanggan.',
                'tglgabung' => now(),
                'fototoko' => 'toko-rumah-tangga.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
