@extends('layouts.admin.app')

@section('title', 'Produk Admin')

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
                        <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">Nama Produk</th>
                        <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">Toko</th>
                        <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">Harga</th>
                        <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">Detail</th>
                        <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">Status</th>
                        <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produks as $index => $product)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b border-gray-300">{{ $product->namaproduk }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $product->tokos->namatoko }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ number_format($product->hargaproduk, 0, ',', '.') }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <button class="bg-[#4D86BC] text-white py-1 px-3 text-xs font-semibold rounded-2xl"
                                onclick="openModal('modal{{ $index }}')">Detail</button>
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <button class="status-button {{ $product->statusdisplay == 1 ? 'bg-[#08781A]' : 'bg-[#FFB83D]' }} text-white py-1 px-3 text-xs font-semibold rounded-2xl"
                                data-product-id="{{ $product->id }}">
                                {{ $product->statusdisplay == 1 ? 'Display' : 'Undisplay' }}
                            </button>
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <button class="bg-red-500 text-white py-1 px-2 text-xs font-semibold rounded-2xl" onclick="openModal('deleteModal')">Hapus</button>
                        </td>
                    </tr>

                    <div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                        <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative">
                            <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal('deleteModal')">
                                <i class="fas fa-times"></i>
                            </button>
                            <h2 class="text-lg font-semibold mb-4">Konfirmasi Hapus</h2>
                            <p class="text-gray-600 mb-4">Apakah Anda yakin ingin menghapus produk ini? Produk yang telah dihapus tidak dapat dipulihkan.</p>
                            <form action="{{ route('product.delete', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="flex justify-end gap-4">
                                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg" onclick="return confirmDelete()">hapus</button>
                                    <button type="button" class="bg-gray-300 text-gray-800 py-2 px-4 rounded-lg" onclick="closeModal('deleteModal')">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Modal Component -->
                    <div id="modal{{ $index }}" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                        <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative">
                            <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal('modal{{ $index }}')">
                                <i class="fas fa-times"></i>
                            </button>
                            <h2 class="text-lg font-semibold mb-4">Detail Produk</h2>
                            <img src="{{ asset('storage/' . $product->fotoproduk) }}" alt="Foto Produk" class="w-full h-64 object-cover mb-4">
                            <p><strong>Nama Produk:</strong> {{ $product->namaproduk }}</p>
                            <p><strong>Kategori:</strong> {{ $product->kategori->kategori }}</p>
                            <p><strong>Harga:</strong> Rp {{ number_format($product->hargaproduk, 0, ',', '.') }}</p>
                            <p><strong>Toko:</strong> {{ $product->tokos->namatoko }}</p>
                            <p><strong>Tanggal Posting:</strong> {{ $product->created_at->format('d M Y') }}</p>
                            <p><strong>Overview:</strong> {{ $product->overviewproduk }}</p>
                            <p><strong>Detail:</strong> {{ $product->deskripsiproduk }}</p>
                            <p><strong>Status:</strong> {{ $product->statusdisplay == 1 ? 'Display' : 'Undisplay' }}</p>
                            <div class="flex justify-end gap-4 mt-4">
                                <button class="bg-gray-300 text-gray-800 py-2 px-4 rounded-lg" onclick="closeModal('modal{{ $index }}')">Tutup</button>
                            </div>
                        </div>
                    </div>
                   
                    @endforeach
                </tbody>
            </table>
        </div>
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