@extends('layouts.toko.app')

@section('title', 'Dashboard Toko')

@php
    $stats = [
        ['title' => 'Produk Terdaftar', 'value' => 60],
        ['title' => 'Produk Pending', 'value' => 100],
        ['title' => 'Produk Terdisplay', 'value' => 50],
    ];
    $produk = [
        ['id' => 1, 'nama' => 'Produk 1', 'harga' => 10000, 'status' => 'display', 'tanggal' => '2023-10-01'],
        ['id' => 2, 'nama' => 'Produk 2', 'harga' => 20000, 'status' => 'undisplay', 'tanggal' => '2023-10-02'],
        ['id' => 3, 'nama' => 'Produk 3', 'harga' => 30000, 'status' => 'display', 'tanggal' => '2023-10-03'],
        ['id' => 4, 'nama' => 'Produk 4', 'harga' => 40000, 'status' => 'undisplay', 'tanggal' => '2023-10-04'],
        ['id' => 5, 'nama' => 'Produk 5', 'harga' => 50000, 'status' => 'display', 'tanggal' => '2023-10-05'],
        ['id' => 6, 'nama' => 'Produk 6', 'harga' => 60000, 'status' => 'display', 'tanggal' => '2023-10-06'],
        ['id' => 7, 'nama' => 'Produk 7', 'harga' => 70000, 'status' => 'undisplay', 'tanggal' => '2023-10-07'],
        ['id' => 8, 'nama' => 'Produk 8', 'harga' => 80000, 'status' => 'display', 'tanggal' => '2023-10-08'],
        ['id' => 9, 'nama' => 'Produk 9', 'harga' => 90000, 'status' => 'undisplay', 'tanggal' => '2023-10-09'],
        ['id' => 10, 'nama' => 'Produk 10', 'harga' => 100000, 'status' => 'display', 'tanggal' => '2023-10-10'],
    ];

@endphp
@section('content')
    <div class="grid grid-flow-col grid-cols-3 h-full w-full gap-[8rem]">
        @foreach ($stats as $stat)
            <div class="bg-white flex-1 shadow-md rounded-lg py-16 flex flex-col justify-center items-center">
                <h1 class="text-6xl font-all text-center">{{ $stat['value'] }}</h1>
                <h2 class="text-xl mt-2 font-semibold">{{ $stat['title'] }}</h2>
            </div>
        @endforeach
    </div>


    <div class="mt-2">
        <h1 class="text-2xl font-semibold">Produk</h1>
        <table class="min-w-full bg-white shadow-md rounded-lg mt-4">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nama Produk</th>
                    <th class="py-2 px-4 border-b">Status</th>
                    <th class="py-2 px-4 border-b">Harga</th>
                    <th class="py-2 px-4 border-b">Tanggal</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($produk as $product)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $product['nama'] }}</td>
                        <td class="py-2 px-4 border-b">{{ $product['status'] }}</td>
                        <td class="py-2 px-4 border-b">Rp. {{ number_format($product['harga'], 0, ',', '.') }}</td>
                        <td class="py-2 px-4 border-b">{{ $product['tanggal'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
