<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Detail Produk</title>
    <x-navigasi/>
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8 mt-20">
    <div class="flex">
        <!-- Gambar dan Judul -->
        <div class="w-1/3 shadow rounded-lg p-4">
            <img src="https://images.tokopedia.net/img/JFrBQq/2023/10/2/2d0d7c9b-1f27-47f8-80ce-9f8141580ee1.jpg" alt="Laptop Gaming Pro++" class="w-full h-auto object-cover">
        </div>

        <!-- Detail Produk -->
        <div class="w-2/3 pl-8">
            <span class="bg-teal-900 text-white text-xs font-semibold px-2 py-0.5 rounded-full inline-block mb-2">Laptop</span>
            <h1 class="text-3xl font-semibold mb-2">Laptop Gaming Pro++</h1>
            <p class="inline-block text-1xl text-white bg-teal-900 py-0.5 px-2 rounded-full mb-4">RP.12.000.000</p>

            <h2 class="text-xl font-semibold mb-2">Overview</h2>
            <p class="text-gray-600 mb-4">Overview of Laptop Gaming Pro++</p>

            <h2 class="text-xl font-semibold mb-2">Deskripsi</h2>
            <ul class="list-disc pl-5 text-gray-600 mb-8">
                <li>1. Fitur unggulan.</li>
                <li>2. Kinerja luar biasa.</li>
                <li>3. Desain stylish.</li>
            </ul>

            <a href="#" class="text-xl inline-block text-center bg-teal-900 text-white py-2 px-32 rounded-lg mb-4">Menuju Link >></a>
        </div>
    </div>
</div>

</body>
</html>
