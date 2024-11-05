<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <x-navigasi/>
    <title>Detail Produk</title>
</head>

<body class="bg-white">

    <div class="container mx-auto py-8 mt-20">
        <div class="flex">
            <div class="w-1/3 shadow rounded-lg p-4">
                <img src="/{{ $produk->fotoproduk }}"
                    alt="{{ $produk->namaproduk }}" class="w-full h-auto object-cover">
            </div>

            <div class="w-2/3 pl-8">
                <span class="bg-teal-900 text-white text-xs font-semibold px-2 py-0.5 rounded-full inline-block mb-2">
                    {{ $produk->kategori->kategori ?? 'Kategori tidak tersedia' }}
                </span>
                <h1 class="text-3xl font-semibold mb-2">{{ $produk->namaproduk }}</h1>
                <p class="inline-block text-1xl text-white bg-teal-900 rounded-full mb-4 py-0.2 px-1w">
                    RP.{{ number_format($produk->hargaproduk, 0, ',', '.') }}
                </p>

                <h2 class="text-xl font-semibold mb-2">Overview</h2>
                <p class="text-gray-600 mb-4">{{ $produk->overviewproduk }}</p>

                <h2 class="text-xl font-semibold mb-2">Deskripsi</h2>
                <ul class="list-disc pl-5 text-gray-600 mb-8">
                    {!! $produk->deskripsiproduk !!}
                </ul>

                <a href="{{ $produk->linkproduk }}" class="text-xl block text-center bg-teal-900 text-white rounded-lg py-2 mb-4">
                    Menuju Link >>
                </a>
            </div>
        </div>
    </div>

</body>

</html>
