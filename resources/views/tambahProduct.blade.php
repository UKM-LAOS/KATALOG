@extends('layouts.toko.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="flex-1 lg:px-4">
    <div class="grid grid-cols-1 gap-4">
        <div class="bg-white p-4 rounded-md">
            <h2 class="text-gray-500 text-lg font-semibold pb-4">Tambah Produk</h2>

            <form action="{{ route('tambahProduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="idtoko" value="{{ auth()->user()->toko->id }}">
            <div class="grid grid-cols-2 gap-4">
                <!-- Form sebelah kiri -->
                <div class="mb-4">
                    <label for="statusdisplay" class="block text-sm font-medium text-gray-700">Status Display</label>
                    <select name="statusdisplay" id="statusdisplay" class="form-input mt-1 block w-full">
                        <option value="1" selected>Display</option>
                        <option value="0">Gamau</option>
                    </select>
                </div>
                    <div class="mb-4">
                        <label for="namaproduk" class="block text-gray-700 font-semibold mb-2">Nama Produk</label>
                        <input type="text" id="namaproduk" name="namaproduk" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Nama produk" required>
                    </div>

                    <div class="mb-4">
                        <label for="hargaproduk" class="block text-gray-700 font-semibold mb-2">Harga Produk</label>
                        <input type="number" id="hargaproduk" name="hargaproduk" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Harga produk" required>
                    </div>

                    <div class="mb-4">
                        <label for="linkproduk" class="block text-gray-700 font-semibold mb-2">Link Pembelian</label>
                        <input type="url" id="linkproduk" name="linkproduk" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Link pembelian" required>
                    </div>

                    <div class="mb-4">
                        <label for="overviewproduk" class="block text-gray-700 font-semibold mb-2">Overview Produk</label>
                        <textarea id="overviewproduk" name="overviewproduk" class="w-full border border-gray-300 p-2 rounded-md" rows="4" placeholder="Deskripsi singkat produk" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="deskripsiproduk" class="block text-gray-700 font-semibold mb-2">Deskripsi Produk</label>
                        <textarea id="deskripsiproduk" name="deskripsiproduk" class="w-full border border-gray-300 p-2 rounded-md" rows="4" placeholder="Deskripsi lengkap produk" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="idkategori" class="block text-gray-700 font-semibold mb-2">Kategori Produk</label>
                        <select id="idkategori" name="idkategori" class="w-full border border-gray-300 p-2 rounded-md" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Form sebelah kanan -->
                <div class="flex items-center justify-center">
                    
                    <div class="border-2 border-dashed border-gray-300 w-40 h-40 flex flex-col items-center justify-center rounded-md">
                        <div class="text-gray-400 text-center">
                            <input type="file" id="fotoproduk" name="fotoproduk" style="display: none;" accept="image/*" required onchange="showFileName()">
                            
                            <a href="javascript:void(0);" id="uploadIcon" onclick="document.getElementById('fotoproduk').click();">
                                <i class="fas fa-plus text-4xl"></i>
                            </a>
                            <p class="mt-2" id="uploadText">Upload Image</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Simpan dan Kembali -->
            <div class="flex justify-end mt-6">
                {{--  --}}
                <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded-lg mr-2">Simpan</button>
                <button type="button" class="bg-red-500 text-white py-2 px-4 rounded-lg" onclick="confirmBack()">Kembali</button>

            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Kembali -->
<div id="backModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/3 lg:w-1/4 relative">
        <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal('backModal')">
            <i class="fas fa-times"></i>
        </button>
        <h2 class="text-xl font-semibold mb-4">Yakin akan kembali?</h2>
        <p class="mb-4">Progress tidak dapat dipulihkan.</p>
        <div class="flex justify-end">
            <button class="bg-red-500 text-white py-2 px-4 rounded-lg mr-2" onclick="goBack()">Kembali</button>
            <button class="bg-gray-500 text-white py-2 px-4 rounded-lg" onclick="closeModal('backModal')">Batalkan</button>
        </div>
    </div>
</div>

<!-- Alert Berhasil Menambahkan Produk -->
<@if (session('success'))
<div id="successAlert" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/3 lg:w-1/4 relative">
        <h2 class="text-xl font-semibold mb-4">Berhasil Menambahkan Produk</h2>
        <p class="mb-4">{{ session('success') }}</p>
        <div class="flex justify-end">
            <a href="/dashboardtoko" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Cek Dashboard</a>
        </div>
    </div>
</div>
@endif
@if ($errors->any())
    <div id="errorAlert" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/3 lg:w-1/4 relative">
            <h2 class="text-xl font-semibold mb-4">Terjadi Kesalahan</h2>
            <ul class="mb-4 text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <div class="flex justify-end">
                <button class="bg-gray-500 text-white py-2 px-4 rounded-lg" onclick="closeModal('errorAlert')">Tutup</button>
            </div>
        </div>
    </div>
@endif

@endsection

<script>
    // Fungsi untuk menampilkan modal ketika pengguna ingin kembali
    function confirmBack() {
        // Cek apakah ada input yang sudah diisi
        let isChanged = false;
        document.querySelectorAll('input, textarea').forEach(input => {
            if (input.value !== '') {
                isChanged = true;
            }
        });

        if (isChanged) {
            document.getElementById('backModal').classList.remove('hidden');
        } else {
            goBack();  // Jika tidak ada perubahan, langsung kembali
        }
    }

    // Fungsi untuk menutup modal
    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
    }

    // Fungsi untuk kembali ke halaman sebelumnya
    function goBack() {
        window.history.back();
    }
    function showSuccessAlert(event) {
        document.getElementById('successAlert').classList.remove('hidden');
    }

    function showFileName() {
    const fileInput = document.getElementById('fotoproduk');
    const uploadText = document.getElementById('uploadText');
    if (fileInput.files.length > 0) {
        uploadText.textContent = fileInput.files[0].name;
    }
}
</script>