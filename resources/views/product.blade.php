<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <x-navigasi/>
    <title>Produk</title>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto py-8 mt-20">
        <div class="flex">
            <!-- Filter Sidebar -->
            <div class="w-1/4 p-4 bg-white shadow rounded-lg">
                <h2 class="text-xl font-semibold mb-4">Filter</h2>
                <div class="mb-4">
                    <details open>
                        <summary class="font-large mb-2 cursor-pointer">Harga</summary>
                        <ul>
                            <li><a href="#" class="block py-2 text-gray-600 hover:text-blue-500">Harga tinggi - rendah</a></li>
                            <li><a href="#" class="block py-2 text-gray-600 hover:text-blue-500">Harga rendah - tinggi</a></li>
                        </ul>
                    </details>
                </div>
                <div class="mb-4">
                    <details open>
                        <summary class="font-medium mb-2 cursor-pointer">Jenis produk</summary>
                        <ul>
                            <li><a href="#" class="block py-2 text-gray-600 hover:text-blue-500">Laptop</a></li>
                            <li><a href="#" class="block py-2 text-gray-600 hover:text-blue-500">HP</a></li>
                            <li><a href="#" class="block py-2 text-gray-600 hover:text-blue-500">Kamera</a></li>
                            <li><a href="#" class="block py-2 text-gray-600 hover:text-blue-500">Printer</a></li>
                        </ul>
                    </details>
                </div>
            </div>

            <!-- Produk List -->
            <div class="w-3/4 grid grid-cols-2 lg:grid-cols-3 gap-6 p-4">

                <!-- Produk -->
                <x-cardProduct></x-cardProduct>
                <x-cardProduct></x-cardProduct>
                <x-cardProduct></x-cardProduct>
                <x-cardProduct></x-cardProduct>
                <x-cardProduct></x-cardProduct>
                <x-cardProduct></x-cardProduct>
                <x-cardProduct></x-cardProduct>
                <x-cardProduct></x-cardProduct>
                <!-- Produk -->

            </div>
        </div>
    </div>

</body>
</html>