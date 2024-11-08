@extends('layouts.toko.app')

@section('title', 'Profil Admin')

@section('content')
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sukses!',
        text: '{{ session('success') }}',
        timer: 2000, 
        showConfirmButton: false
    });
</script>
@endif
    <div class=" bg-white rounded-lg px-3 py-2 shadow-md mx-auto">
        <div class="flex flex-col">
            <div class="flex items-center justify-between mb-6">
            <h1 class="text-left mt-2 font-semibold text-4xl mb-6">{{$user->toko->namatoko}}</h1>
            <button class="align-center font-semibold w-32 h-[32] text-[2] bg-red-600 text-red-50 rounded-1 cursor-pointer hover:bg-red-500 ml-44 mb-4"><a href="{{route('logout')}}">Logout</a></button>
            </div>
            <h1 class="text-left text-1xl"><b>Email</b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: &nbsp {{$user->email}}</h1>
            <br>
            <div class="flex gap-4 mb-4 ">
                <img src="{{ asset('storage/' . $user->toko->fototoko) }}" alt="LAOS MUDA TIDAK MENYERAH LAOS JAYA" class="w-72">
                <div class=" bg-bg-zinc-400 max-w-[784] shadow-md mx-auto">
                    <h1 class="mt-[20] text-xl ml-4 font-semibold mb-[12]">Deskripsi Toko</h1>
                    <p class="ml-4">{{$user->toko->deskripsitoko}}</p>
                </div>
            </div>
                <div class="flex ml-36">
                    <button id="Edit" class="align-center font-semibold w-32 h-[32] text-[2] bg-lime-600 text-lime-50 rounded-1 cursor-pointer hover:bg-lime-500 ml-44 mb-4" onclick="openModal('editProfilToko')">Edit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for edit profil -->
    <div id="editProfilToko" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 {{ $errors->any() ? '' : 'hidden' }}">
        <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative max-h-[90vh] overflow-y-auto">
            <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal('editProfilToko')">
                <i class="fas fa-times"></i>
            </button>
            <h2 class="text-xl font-semibold mb-4">Edit Profil</h2>

            <!-- Form Update Profil -->
            <form action="{{route('profilTokoEdit', $user->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Input Email -->
                <div class="mb-4">
                    <label for="emailToko" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full border border-gray-300 p-2 rounded-md @error('email') border-red-500 @enderror"
                        value="{{ old('email', $user->email) }}" required>

                    @error('email')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- Input Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full border border-gray-300 p-2 rounded-md @error('password') border-red-500 @enderror"
                        oninput="toggleKonfirmPassword()">

                    @error('password')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- Konfirmasi Password -->
                <div class="mb-4">
                    <label for="konfirmPassword" class="block text-gray-700 font-semibold mb-2">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="w-full border border-gray-300 p-2 rounded-md" disabled>
                </div>
                 <!-- Nama Toko -->
                 <div class="mb-4">
                    <label for="namatoko" class="block text-gray-700 font-semibold mb-2">Nama Toko</label>
                    <input type="text" id="namatoko" name="namatoko"
                        class="w-full border border-gray-300 p-2 rounded-md @error('namatoko') border-red-500 @enderror"
                        value="{{ old('namatoko', $user->toko->namatoko) }}" required>

                    @error('namatoko')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                 <!-- Input Foto Toko -->
                 <div class="mb-4">
                    <label for="fototoko" class="block text-gray-700 font-semibold mb-2">Foto Toko</label>
                    <input type="file" name="fototoko" id="fototoko" />
                    @if($user->toko->fototoko)
                    <img src="{{ asset('storage/' . $user->toko->fototoko) }}" alt="Gambar Tempat" class="mt-2" width="150">
                    @endif
                    {{-- <input type="file" id="fototoko" name="fototoko"
                        class="w-full border border-gray-300 p-2 rounded-md @error('fototoko') border-red-500 @enderror"
                        value="{{ old('fototoko', $user->toko->fototoko) }}" required> --}}

                    @error('fototoko')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                 <!-- Input Link Toko -->
                 <div class="mb-4">
                    <label for="linktoko" class="block text-gray-700 font-semibold mb-2">Link Toko</label>
                    <input type="text" id="linktoko" name="linktoko"
                        class="w-full border border-gray-300 p-2 rounded-md @error('linktoko') border-red-500 @enderror"
                        value="{{ old('linktoko', $user->toko->linktoko) }}" required>

                    @error('linktoko')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!--Input Deskripsi Toko -->
                <div class="mb-4">
                    <label for="deskripsitoko" class="block text-gray-700 font-semibold mb-2">Deskripsi Toko</label>
                    <textarea type="text" id="deskripsitoko" name="deskripsitoko"
                        class="w-full border border-gray-300 p-2 rounded-md" cols="30" rows="10"
                      required>{{ old('deskripsitoko', $user->toko->deskripsitoko) }} 
                    </textarea>
                    @error('deskripsitoko')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <!-- Tombol Simpan -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

<script>
    function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }

    function toggleKonfirmPassword() {
        const passwordField = document.getElementById('password');
        const konfirmPasswordField = document.getElementById('password_confirmation');

        konfirmPasswordField.disabled = passwordField.value.trim() === "";
    }
</script>
