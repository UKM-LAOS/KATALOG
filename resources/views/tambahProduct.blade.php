@extends('layouts.toko.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="flex-1 lg:px-4">
    <div class="grid grid-cols-1 gap-4">
        <div class="bg-white p-4 rounded-md">
            <h2 class="text-gray-500 text-lg font-semibold pb-4">Tambah Produk</h2>

            <div class="grid grid-cols-2 gap-4">
                <!-- Form sebelah kiri -->
                <div>
                    <div class="mb-4">
                        <label for="namaBarang" class="block text-gray-700 font-semibold mb-2">Nama Barang</label>
                        <input type="text" id="namaBarang" name="namaBarang" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Nama barang">
                    </div>

                    <div class="mb-4">
                        <label for="hargaBarang" class="block text-gray-700 font-semibold mb-2">Harga Barang</label>
                        <input type="number" id="hargaBarang" name="hargaBarang" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Harga barang">
                    </div>

                    <div class="mb-4">
                        <label for="linkPembelian" class="block text-gray-700 font-semibold mb-2">Link Pembelian</label>
                        <input type="url" id="linkPembelian" name="linkPembelian" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Link pembelian">
                    </div>

                    <div class="mb-4">
                        <label for="overviewBarang" class="block text-gray-700 font-semibold mb-2">Overview Barang</label>
                        <textarea id="overviewBarang" name="overviewBarang" class="w-full border border-gray-300 p-2 rounded-md" rows="4" placeholder="Deskripsi toko"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="deskripsiBarang" class="block text-gray-700 font-semibold mb-2">Deskripsi Barang</label>
                        <textarea id="deskripsiBarang" name="deskripsiBarang" class="w-full border border-gray-300 p-2 rounded-md" rows="4" placeholder="Deskripsi barang"></textarea>
                    </div>
                </div>

                <!-- Form sebelah kanan -->
                <div class="flex items-center justify-center">
                    <div class="border-2 border-dashed border-gray-300 w-40 h-40 flex flex-col items-center justify-center rounded-md">
                        <div class="text-gray-400 text-center">
                            <!-- Input file yang disembunyikan -->
                            <input type="file" id="fileInput" style="display: none;" onchange="showFileName()" />
                            
                            <!-- Elemen untuk menampilkan ikon atau nama file -->
                            <a href="javascript:void(0);" id="uploadIcon" onclick="document.getElementById('fileInput').click();">
                                <i class="fas fa-plus text-4xl"></i>
                            </a>
                            <p class="mt-2" id="uploadText">Upload Image</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Simpan dan Kembali -->
            <div class="flex justify-end mt-6">
                <button class="bg-green-500 text-white py-2 px-4 rounded-lg mr-2" onclick="showSuccessAlert()">Simpan</button>
                <button class="bg-red-500 text-white py-2 px-4 rounded-lg" onclick="confirmBack()">Kembali</button>
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
<div id="successAlert" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/3 lg:w-1/4 relative">
        <h2 class="text-xl font-semibold mb-4">Berhasil Menambahkan Produk</h2>
        <p class="mb-4">Produk berhasil ditambahkan. Cek di dashboard.</p>
        <div class="flex justify-end">
            <a href="/dashboardtoko" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Cek Dashboard</a>
        </div>
    </div>
</div>

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

    // Fungsi untuk menampilkan alert sukses
    function showSuccessAlert() {
        // Simulasikan proses simpan (bisa tambahkan logika penyimpanan sebenarnya)
        document.getElementById('successAlert').classList.remove('hidden');
    }

    function showFileName() {
        const fileInput = document.getElementById('fileInput');
        const uploadIcon = document.getElementById('uploadIcon');
        const uploadText = document.getElementById('uploadText');

        // Jika ada file yang dipilih, ubah ikon menjadi nama file
        if (fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
            uploadIcon.innerHTML = fileName; // Mengganti ikon dengan nama file
            uploadText.style.display = 'none'; // Sembunyikan teks "Upload Image"
        }
    }
</script>
