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

<body class="bg-white">

    <div class="container mx-auto py-8 mt-20">
        <div class="grid grid-cols-4 gap-6">
            <!-- Filter Sidebar -->
            <div class="col-span-1 p-4 bg-white shadow rounded-lg">
                <h2 class="ml-6 mr-6 text-xl font-semibold mb-4">Filter</h2>
                <div class="mb-4">
                    <details open>
                        <summary class="ml-6 mr-6 font-large mb-2 cursor-pointer">Harga</summary>
                        <ul>
                            <li><a href="#" class="mb-2 ml-6 mr-6 rounded-lg bg-gray-100 block py-2 text-slate-800 hover:text-blue-500 text-center">Harga tinggi - rendah</a></li>
                            <li><a href="#" class="mb-2 ml-6 mr-6 rounded-lg bg-gray-100 block py-2 text-slate-800 hover:text-blue-500 text-center">Harga rendah - tinggi</a></li>
                        </ul>
                    </details>
                </div>
                <div class="mb-4">
                    <details open>
                        <summary class="ml-6 mr-6 font-medium mb-2 cursor-pointer">Jenis produk</summary>
                        <ul>
                            <li><a href="#" class="mb-2 ml-6 mr-6 rounded-lg bg-gray-100 block py-2 text-slate-800 hover:text-blue-500 text-center">Laptop</a></li>
                            <li><a href="#" class="mb-2 ml-6 mr-6 rounded-lg bg-gray-100 block py-2 text-slate-800 hover:text-blue-500 text-center">HP</a></li>
                            <li><a href="#" class="mb-2 ml-6 mr-6 rounded-lg bg-gray-100 block py-2 text-slate-800 hover:text-blue-500 text-center">Kamera</a></li>
                            <li><a href="#" class="mb-2 ml-6 mr-6 rounded-lg bg-gray-100 block py-2 text-slate-800 hover:text-blue-500 text-center">Printer</a></li>
                        </ul>
                    </details>
                </div>
            </div>

            <!-- Produk List -->
            <div class="col-span-3 grid grid-cols-2 lg:grid-cols-3 gap-6 p-4">
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
