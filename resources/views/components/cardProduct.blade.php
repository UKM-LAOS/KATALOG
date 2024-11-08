@props(['produk'])
<div class="bg-white shadow rounded-lg p-4 w-60 flex flex-col justify-between">
    <div>
        <img src="{{ $produk->fotoproduk }}" alt="{{ $produk->namaproduk }}" class="w-full h-32 object-cover mb-4">
        <span class="bg-slate-600 text-white text-xs font-semibold px-2 py-1 rounded-full inline-block ml-2 mb-2">
            {{ $produk->kategori->kategori ?? 'Kategori tidak tersedia' }}
        </span>
        <h3 class="text-lg font-semibold mb-2 line-clamp-2">
            {{ $produk->namaproduk }}
        </h3>
        <p class="text-gray-600 mb-4">RP.{{ number_format($produk->hargaproduk, 0, ',', '.') }}</p>
    </div>
    <div>
        @guest
            <a href="/detail-product-guest/{{ $produk->id }}" class="block text-center bg-slate-500 text-white py-2 rounded-lg">
                Detail
            </a>
        @endguest
        @auth
            <a href="/detail-product/{{ $produk->id }}" class="block text-center bg-slate-500 text-white py-2 rounded-lg">
                Detail
            </a>
        @endauth
    </div>
</div>
