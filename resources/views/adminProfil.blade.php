@extends('layouts.admin.app')

@section('title', 'Produk admin')

@section('content')
    <div class="flex-1 lg:px-4">
        <div class="grid grid-cols-1 gap-4">
            <div class="bg-white p-4 rounded-md">
                <h2 class="text-gray-500 text-lg font-semibold pb-4">Personal Info</h2>

                <!-- Grid tambahan di dalam card -->
                <div class="bg-[#39586D] p-4 rounded-md mx-auto w-1/2 flex flex-col items-center text-center">
                    <!-- Bagian Email -->
                    <div class="overflow-x-auto">
                        <table class="border-separate border-0">
                            <tr>
                                <td class="font-bold py-1 text-white">Email</td>
                            </tr>
                            <tr>
                                <td class="py-1 text-white">example@example.com</td>
                            </tr>
                        </table>
                    </div>

                    <!-- Tombol Edit -->
                    <div class="mt-4">
                        <button class="bg-white text-[#39586D] py-2 px-4 rounded-lg" onclick="openModal('editProfilAdmin')">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for edit profil -->
    <div id="editProfilAdmin" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative max-h-[90vh] overflow-y-auto">
            <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal('editProfilAdmin')">
                <i class="fas fa-times"></i>
            </button>
            <h2 class="text-xl font-semibold mb-4">Edit Profil</h2>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="emailAdmin" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="emailAdmin" name="emailAdmin"
                        class="w-full border border-gray-300 p-2 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full border border-gray-300 p-2 rounded-md" required oninput="toggleKonfirmPassword()">
                </div>
                <div class="mb-4">
                    <label for="konfirmPassword" class="block text-gray-700 font-semibold mb-2">Konfirmasi Password</label>
                    <input type="password" id="konfirmPassword" name="konfirmPassword"
                        class="w-full border border-gray-300 p-2 rounded-md" required disabled>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Simpan</button>
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

    function toggleKonfirmPassword() {
        const passwordField = document.getElementById('password');
        const konfirmPasswordField = document.getElementById('konfirmPassword');
        
        if (passwordField.value.trim() !== "") {
            konfirmPasswordField.disabled = false;
        } else {
            konfirmPasswordField.disabled = true;
        }
    }
</script>