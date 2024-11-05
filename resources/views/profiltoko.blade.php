@extends('layouts.toko.app')

@section('title', 'Profil Toko')

@section('content')
<div class="flex absolute ml-72 mt-2">
    <div class=" bg-white rounded-lg px-4 py-4 shadow-md mx-auto">
        <d class="flex flex-col">
            <h1 class="text-left mt-4font-semibold text-4xl mb-6">Axio Shop</h1>
            <h1 class="text-left text-1xl"><b>Email</b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: &nbsp Xauxau@gmail.com</h1>
            <div class="flex">
                <h1 class="text-left text-1xl "><b>Password</b> &nbsp &nbsp : &nbsp </h1>
                <div id="password">****</div>
                <button id="toggleButton" class="font-sans w-32 h-[32] text-[2] bg-stone-200 text-black rounded-1 cursor-pointer hover:bg-stone-300 ml-44 mb-4">Tampilkan Sandi</button>
            </div>
            <script>
            const passwordElement = document.getElementById('password');
            const toggleButton = document.getElementById('toggleButton');
            const originalPassword = 'Rahasia_881';
            toggleButton.addEventListener('click', () => {
                if (passwordElement.textContent === '****') {
                passwordElement.textContent = originalPassword;
                toggleButton.textContent = 'Tutup Password';
                } else {
                passwordElement.textContent = '****';
                toggleButton.textContent = 'Tampilkan Sandi';
                }
            });
            </script>
            <div class="flex gap-4 mb-4 ">
                <img src="/img/TOKO_KOMPUTER.jpeg" alt="Gambar sakura berguguran" class="w-72">
                <div class=" bg-bg-zinc-400 max-w-[812] shadow-md mx-auto">
                    <h1 class="mt-[20] text-xl ml-4 font-semibold mb-[12]">Deskripsi Toko</h1>
                    <p class="ml-4">Axio Shop sendiri merupakan toko reparasi dan penjualan kebutuhan komputer, Axio Shop menawarkan berbagai kebutuhan dari perbaikan atau reparasi, kebutuhan komputer, handphone, kabel dan sebaginya. <br> Axio Shop: Perbaikan Cepat, Hasil Maksimal Bosan menunggu lama untuk perbaikan gadget? Pilih Axio Shop! Kami berkomitmen untuk menyelesaikan perbaikan secepat mungkin tanpa mengorbankan kualitas. Nikmati layanan antar-jemput gratis dan garansi untuk setiap perbaikan.</p>
                </div>
            </div>
                <h1 class="font-semibold text-xl mb-[12]">Produk Toko</h1>
                <ol>
                    <div class="flex gap-6">
                        <li>Laptop</li>
                        <li>20.000.000</li>
                        <li>20-10-2004</li>
                    </div>
                        <div class="flex gap-6">
                        <li>Laptop</li>
                        <li>20.000.000</li>
                        <li>20-10-2004</li>
                    </div>
                        <div class="flex gap-6">
                        <li>Laptop</li>
                        <li>20.000.000</li>
                        <li>20-10-2004</li>
                    </div>
                        <div class="flex gap-6">
                        <li>Laptop</li>
                        <li>20.000.000</li>
                        <li>20-10-2004</li>
                    </div>
                </ol>
                <div class="flex ml-36">
                    <button id="Edit" class="align-center font-semibold w-32 h-[32] text-[2] bg-lime-600 text-lime-50 rounded-1 cursor-pointer hover:bg-lime-500 ml-44 mb-4">Edit</button>
                    <button id="Kembali" class="align-center  text-rose-50 font-semibold w-32 h-[32] text-[2] bg-rose-500 rounded-1 cursor-pointer hover:bg-rose-300 ml-44 mb-4"><a href="/tokoadmin" class="none">Kembali</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
