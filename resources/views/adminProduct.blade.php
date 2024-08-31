<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk Admin</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="h-full w-full bg-slate-50">
    <div class="flex flex-col h-screen bg-gray-100">
        <div class="flex-1 flex">
            <x-navbarAdmin />

            <div class="flex-1 p-4">
                <div class="grid grid-cols-1 gap-4 mt-2 p-2">
                    <div class="bg-white p-4 rounded-md">
                        <h2 class="text-gray-500 text-lg font-semibold pb-4">Data Produk</h2>
                        <div class="my-1"></div>
                        <div class="bg-gradient-to-r from-gray-300 to-gray-500 h-px mb-6"></div>
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
                                <tr class="hover:bg-gray-100">
                                    <td class="py-2 px-4 border-b border-gray-300">Laptop Gaming Pro++</td>
                                    <td class="py-2 px-4 border-b border-gray-300">Kasus ROG</td>
                                    <td class="py-2 px-4 border-b border-gray-300">Rp. 10.000.000</td>
                                    <td class="py-2 px-4 border-b border-gray-300">
                                        <button class="bg-[#4D86BC] text-white py-1 px-3 text-xs font-semibold rounded-2xl" onclick="openModal('modal1')">Detail</button>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-300">
                                        <button class="status-button bg-[#08781A] text-white py-1 px-3 text-xs font-semibold rounded-2xl">Display</button>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-300">
                                        <button class="bg-red-500 text-white py-1 px-2 text-xs font-semibold rounded-2xl" onclick="openModal('deleteModal')">Hapus</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-100">
                                    <td class="py-2 px-4 border-b border-gray-300">Kamera Ketche</td>
                                    <td class="py-2 px-4 border-b border-gray-300">Nikoni</td>
                                    <td class="py-2 px-4 border-b border-gray-300">Rp. 5.000.000</td>
                                    <td class="py-2 px-4 border-b border-gray-300">
                                        <button class="bg-[#4D86BC] text-white py-1 px-3 text-xs font-semibold rounded-2xl" onclick="openModal('modal2')">Detail</button>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-300">
                                        <button class="status-button bg-[#FFB83D] text-white py-1 px-3 text-xs font-semibold rounded-2xl">Undisplay</button>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-300">
                                        <button class="bg-red-500 text-white py-1 px-2 text-xs font-semibold rounded-2xl" onclick="openModal('deleteModal')">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal1" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative max-h-[90vh] overflow-y-auto">
            <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal()">
                <i class="fas fa-times"></i>
            </button>
            <div class="flex flex-col items-center">
                <img src="https://via.placeholder.com/150" alt="Product Image" class="w-32 h-32 object-cover mb-4">
                <h2 class="text-xl font-semibold mb-2">Laptop Gaming Pro++</h2>
                <p class="text-gray-600 mb-2"><strong>Kategori:</strong> Laptop</p>
                <p class="text-gray-600 mb-2"><strong>Harga:</strong> Rp. 10.000.000</p>
                <p class="text-gray-600 mb-2"><strong>Toko:</strong> Kasus ROG</p>
                <p class="text-gray-600 mb-2"><strong>Tanggal Posting:</strong> 01/09/2024</p>
                <p class="text-gray-600 mb-4"><strong>Overview:</strong> Laptop gaming dengan spesifikasi tinggi untuk performa maksimal. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque soluta asperiores, dolorum deserunt beatae voluptatum in fugiat cupiditate praesentium vitae eius, ab ea, optio animi dicta vel consequatur? Atque, praesentium?</p>
                <p class="text-gray-600 mb-4"><strong>Detail:</strong> Dilengkapi dengan prosesor terbaru dan kartu grafis canggih. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur eos nemo debitis nihil, nobis odit quisquam vero voluptatum, fuga expedita animi! Modi laboriosam at ratione quis mollitia inventore laborum? Aliquid?</p>
                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mb-4">Lihat Produk</button>
                <p class="text-gray-600"><strong>Status Display:</strong> Display</p>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div id="modal2" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative max-h-[90vh] overflow-y-auto">
            <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal()">
                <i class="fas fa-times"></i>
            </button>
            <div class="flex flex-col items-center">
                <img src="https://via.placeholder.com/150" alt="Product Image" class="w-32 h-32 object-cover mb-4">
                <h2 class="text-xl font-semibold mb-2">Kamera Ketche</h2>
                <p class="text-gray-600 mb-2"><strong>Kategori:</strong> Kamera</p>
                <p class="text-gray-600 mb-2"><strong>Harga:</strong> Rp. 5.000.000</p>
                <p class="text-gray-600 mb-2"><strong>Toko:</strong> Nikoni</p>
                <p class="text-gray-600 mb-2"><strong>Tanggal Posting:</strong> 01/09/2024</p>
                <p class="text-gray-600 mb-4"><strong>Overview:</strong> Kamera ketche dengan spesifikasi tinggi untuk performa maksimal.</p>
                <p class="text-gray-600 mb-4"><strong>Detail:</strong> Dilengkapi dengan prosesor terbaru dan kartu grafis canggih. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis beatae nobis rem quidem? Non nemo sed iusto facere nobis dolore consequatur, eius voluptate quae quasi odio molestias, numquam blanditiis.</p>
                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mb-4">Lihat Produk</button>
                <p class="text-gray-600"><strong>Status Display:</strong> Display</p>
            </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative">
            <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal()">
                <i class="fas fa-times"></i>
            </button>
            <h2 class="text-lg font-semibold mb-4">Konfirmasi Hapus</h2>
            <p class="text-gray-600 mb-4">Apakah Anda yakin ingin menghapus produk ini? Produk yang telah dihapus tidak dapat dipulihkan.</p>
            <div class="flex justify-end gap-4">
                <button class="bg-red-500 text-white py-2 px-4 rounded-lg" onclick="confirmDelete()">Hapus</button>
                <button class="bg-gray-300 text-gray-800 py-2 px-4 rounded-lg" onclick="closeModal()">Batal</button>
            </div>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal() {
            document.querySelectorAll('.fixed').forEach(modal => {
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
</body>
</html>
