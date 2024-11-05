<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'namaproduk' => 'Laptop Gaming',
                'hargaproduk' => 15000000,
                'overviewproduk' => 'Laptop Gaming dengan performa tinggi untuk gaming dan produktivitas.',
                'deskripsiproduk' => 'Ditenagai oleh prosesor terbaru dan kartu grafis canggih, laptop ini dirancang untuk pengalaman gaming yang mulus.',
                'linkproduk' => 'https://example.com/laptop-gaming',
                'fotoproduk' => 'img/Laptop.svg',
                'tglposting' => now(),
                'statusdisplay' => 1,
                'totalklik' => 120,
                'idkategori' => 1,
                'idtoko' => 1,      
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaproduk' => 'iPhone 14 Pro',
                'hargaproduk' => 20000000,
                'overviewproduk' => 'iPhone 14 Pro dengan kamera canggih dan performa luar biasa.',
                'deskripsiproduk' => 'iPhone 14 Pro dilengkapi dengan layar Super Retina XDR, chip A16 Bionic, dan sistem kamera Pro untuk hasil fotografi dan videografi yang mengagumkan.',
                'linkproduk' => 'https://example.com/iphone-14-pro',
                'fotoproduk' => 'img/Iphone.svg',
                'tglposting' => now(),
                'statusdisplay' => 1,
                'totalklik' => 250,
                'idkategori' => 2,
                'idtoko' => 2,   
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaproduk' => 'Kamera Syuting Profesional',
                'hargaproduk' => 35000000,
                'overviewproduk' => 'Kamera syuting profesional untuk produksi video berkualitas tinggi.',
                'deskripsiproduk' => 'Dilengkapi dengan sensor gambar besar dan kemampuan merekam video 8K, kamera ini cocok untuk produksi film dan iklan.',
                'linkproduk' => 'https://example.com/kamera-syuting',
                'fotoproduk' => 'img/Kamera.svg',
                'tglposting' => now(),
                'statusdisplay' => 1,
                'totalklik' => 180,
                'idkategori' => 1,  
                'idtoko' => 3,     
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaproduk' => 'Kipas Angin',
                'hargaproduk' => 300000,
                'overviewproduk' => 'Kipas angin dengan 3 kecepatan untuk udara sejuk di rumah.',
                'deskripsiproduk' => 'Kipas angin hemat energi, memiliki 3 level kecepatan, dan desain modern untuk penggunaan dalam ruangan.',
                'linkproduk' => 'https://example.com/kipas-angin',
                'fotoproduk' => 'img/Laptop.svg',
                'tglposting' => now(),
                'statusdisplay' => 2,
                'totalklik' => 90,
                'idkategori' => 1,  
                'idtoko' => 1,   
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
