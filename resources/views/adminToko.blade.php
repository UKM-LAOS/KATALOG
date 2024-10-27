@extends('layouts.admin.app')

@section('title', 'Data Toko')

@section('content')
<div class="flex-1 lg:px-4">
    <div class="grid grid-cols-1 gap-4 ">
        <div class="bg-white p-4 rounded-md">
            <h2 class="text-gray-500 text-lg font-semibold pb-4">Data Toko</h2>
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-gray-300 to-gray-500 h-px mb-6"></div>
            <div class="flex justify-end mb-4">
                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg" onclick="openModal('addStoreModal')">Tambah
                    Toko</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full table-auto text-sm">
                    <thead>
                        <tr class="text-sm leading-normal">
                            <th
                                class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">
                                Nama Toko</th>
                            <th
                                class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">
                                Tanggal Gabung</th>
                            <th
                                class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">
                                Jumlah Produk</th>
                            <th
                                class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300 text-left">
                                Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tokos as $toko)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b border-gray-300">{{ $toko->namatoko }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">{{ $toko->tglgabung }}</td>
                            <td class="py-2 px-4 border-b border-gray-300">60 Produk</td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                <button class="bg-[#4D86BC] text-white py-1 px-3 text-xs font-semibold rounded-2xl"
                                    onclick="openModal('modal{{ $toko->id }}')">Detail</button>
                            </td>
                        </tr>

                        <div id="modal{{ $toko->id }}" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                            <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative max-h-[90vh] overflow-y-auto">
                                <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal('modal{{ $toko->id }}')">
                                    <i class="fas fa-times"></i>
                                </button>
                                <div class="flex flex-col items-center">
                                    <img src="https://via.placeholder.com/150" alt="Store Image" class="w-32 h-32 object-cover mb-4">
                                    <h2 class="text-xl font-semibold mb-2">{{ $toko->namatoko }}</h2>
                                    <p class="text-gray-600 mb-4"><strong>Deskripsi:</strong> {{ $toko->deskripsitoko }}</p>
                                    <p class="text-gray-600 mb-4"><strong>Email Toko:</strong> {{ $toko->email }}</p>
                                    <div class="flex gap-4">
                                        <a href="tambahproduk" class="bg-blue-500 text-white py-2 px-4 rounded-lg inline-block">Kunjungi Toko</a>
                                        <button class="bg-red-500 text-white py-2 px-4 rounded-lg" onclick="openResetPasswordModal()">Reset
                                            Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal for adding a new store -->
<div id="addStoreModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative max-h-[90vh] overflow-y-auto">
        <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal('addStoreModal')">
            <i class="fas fa-times"></i>
        </button>
        <h2 class="text-xl font-semibold mb-4">Tambah Toko</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="storeName" class="block text-gray-700 font-semibold mb-2">Nama Toko</label>
                <input type="text" id="storeName" name="storeName"
                    class="w-full border border-gray-300 p-2 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="storeLink" class="block text-gray-700 font-semibold mb-2">Link Toko</label>
                <input type="url" id="storeLink" name="storeLink"
                    class="w-full border border-gray-300 p-2 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="storeDescription" class="block text-gray-700 font-semibold mb-2">Deskripsi Toko</label>
                <textarea id="storeDescription" name="storeDescription" rows="4"
                    class="w-full border border-gray-300 p-2 rounded-md" required></textarea>
            </div>
            <div class="mb-4">
                <label for="storeImage" class="block text-gray-700 font-semibold mb-2">Foto Toko</label>
                <input type="file" id="storeImage" name="storeImage"
                    class="w-full border border-gray-300 p-2 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 p-2 rounded-md"
                    required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full border border-gray-300 p-2 rounded-md" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Simpan</button>
        </form>
    </div>
</div>

<!-- Modal for store details -->



<!-- Modal for resetting password -->
<div id="resetPasswordModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative max-h-[90vh] overflow-y-auto">
        <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal('resetPasswordModal')">
            <i class="fas fa-times"></i>
        </button>
        <h2 class="text-xl font-semibold mb-4">Yakin reset password?</h2>
        <p>Toko akan mendapatkan password baru yang telah dienkripsi dan dikirimkan melalui emailnya</p>
        <br>
        <form action="#" method="post">
            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg">Yakin</button>
            <button class="bg-blue-500 text-white py-2 px-4 rounded-lg">Batalkan</button>
        </form>
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

    function openResetPasswordModal() {
        document.getElementById('resetPasswordModal').classList.remove('hidden');
    }
</script>