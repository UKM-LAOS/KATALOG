<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <x-navigasi />
    <title>Produk</title>
</head>

<body class="bg-white">

    <div class="container mx-auto py-8">
        <div class="flex">
            <div class="w-2/6 p-4 bg-white shadow rounded-lg">
                <h2 class="ml-6 mr-6 text-xl font-semibold mb-4">Filter</h2>
                <div class="mb-4">
                    <details open>
                        <summary class="ml-6 mr-6 font-large mb-2 cursor-pointer">Harga</summary>
                        <ul>
                            <li><a href="{{ route('filter.products', ['sort' => 'harga-desc', 'kategori_id' => request('kategori_id')]) }}" class="mb-2 ml-6 mr-6 rounded-lg bg-gray-100 block py-2 text-slate-800 hover:text-blue-500 text-center">Harga tinggi - rendah</a></li>
                            <li><a href="{{ route('filter.products', ['sort' => 'harga-asc', 'kategori_id' => request('kategori_id')]) }}" class="mb-2 ml-6 mr-6 rounded-lg bg-gray-100 block py-2 text-slate-800 hover:text-blue-500 text-center">Harga rendah - tinggi</a></li>
                        </ul>
                    </details>
                </div>
                <div class="mb-4">
                    <details open>
                        <summary class="ml-6 mr-6 font-medium mb-2 cursor-pointer">Jenis produk</summary>
                        <ul>
                            @foreach ($categories as $categori)
                            <li>
                                <a href="{{ route('filter.products', ['kategori_id' => $categori->id, 'sort' => request('sort')]) }}" class="mb-2 ml-6 mr-6 rounded-lg bg-gray-100 block py-2 text-slate-800 hover:text-blue-500 text-center">
                                    {{ $categori->kategori }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </details>
                </div>
            </div>

            <div class="w-3/4 flex flex-wrap gap-6 p-4">
                @foreach ($produks as $produk)
                <x-cardProduct :produk="$produk" />
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>