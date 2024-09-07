@php
    $products = [
        [
            'name' => 'Laptop Gaming Pro++',
            'category' => 'Laptop',
            'price' => 'Rp. 10.000.000',
            'store' => 'Kasus ROG',
            'date' => '01/09/2024',
            'overview' => 'Laptop gaming dengan spesifikasi tinggi untuk performa maksimal.',
            'detail' => 'Dilengkapi dengan prosesor terbaru dan kartu grafis canggih.',
            'status' => 'Display',
            'image' => 'https://via.placeholder.com/150',
        ],
        [
            'name' => 'Kamera Ketche',
            'category' => 'Kamera',
            'price' => 'Rp. 5.000.000',
            'store' => 'Nikoni',
            'date' => '01/09/2024',
            'overview' => 'Kamera ketche dengan spesifikasi tinggi untuk performa maksimal.',
            'detail' => 'Dilengkapi dengan prosesor terbaru dan kartu grafis canggih.',
            'status' => 'Display',
            'image' => 'https://via.placeholder.com/150',
        ],
    ];
@endphp
@extends('layouts.admin.app')

@section('title', 'Produk admin')

@section('content')

    <div class="flex-1 lg:px-4">
        <div class="bg-white p-4 rounded-md">
            <h2 class="text-gray-500 text-lg font-semibold pb-4">Data Produk</h2>
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-gray-300 to-gray-500 mb-6"></div>
            <div class="overflow-x-auto">
                <table class="w-full table-auto text-sm">
                    <thead>
                        <tr class="text-sm leading-normal">
                            <th
                                class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">
                                Nama Produk</th>
                            <th
                                class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">
                                Toko</th>
                            <th
                                class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">
                                Harga</th>
                            <th
                                class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">
                                Detail</th>
                            <th
                                class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">
                                Status</th>
                            <th
                                class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr class="hover:bg-gray-100">
                                <td class="py-2 px-4 border-b border-gray-300">{{ $product['name'] }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{ $product['store'] }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">{{ $product['price'] }}</td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <button class="bg-[#4D86BC] text-white py-1 px-3 text-xs font-semibold rounded-2xl"
                                        onclick="openModal('modal{{ $index }}')">Detail</button>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <button
                                        class="status-button bg-[#08781A] text-white py-1 px-3 text-xs font-semibold rounded-2xl">Display</button>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-300">
                                    <button class="bg-red-500 text-white py-1 px-2 text-xs font-semibold rounded-2xl"
                                        onclick="openModal('deleteModal')">Hapus</button>
                                </td>
                            </tr>

                            <!-- Modal Component -->
                            <x-productModal :product="$product" modalId="modal{{ $index }}" />
                        @endforeach <!-- Modal Hapus -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative">
            <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal('deleteModal')">
                <i class="fas fa-times"></i>
            </button>
            <h2 class="text-lg font-semibold mb-4">Konfirmasi Hapus</h2>
            <p class="text-gray-600 mb-4">Apakah Anda yakin ingin menghapus produk ini? Produk yang telah dihapus tidak
                dapat dipulihkan.</p>
            <div class="flex justify-end gap-4">
                <button class="bg-red-500 text-white py-2 px-4 rounded-lg" onclick="confirmDelete()">Hapus</button>
                <button class="bg-gray-300 text-gray-800 py-2 px-4 rounded-lg" onclick="closeModal('deleteModal')">Batal</button>
            </div>

        </div>
    @endsection
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(id) {
            document.querySelectorAll('#' + id).forEach(modal => {
                modal.classList.add('hidden');
            });
        }

        function confirmDelete() {
            alert('Item telah dihapus!');
            closeModal();
        }

        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.status-button');
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    if (button.textContent === 'Display') {
                        button.textContent = 'Undisplay';
                        button.classList.remove('bg-[#08781A]');
                        button.classList.add('bg-[#FFB83D]');
                    } else {
                        button.textContent = 'Display';
                        button.classList.remove('bg-[#FFB83D]');
                        button.classList.add('bg-[#08781A]');
                    }
                });
            });
        });
    </script>
