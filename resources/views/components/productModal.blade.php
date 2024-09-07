<!-- resources/views/components/product-modal.blade.php -->
<div id="{{ $modalId }}" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg w-11/12 md:w-1/2 lg:w-1/3 relative max-h-[90vh] overflow-y-auto">
        <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700" onclick="closeModal('{{ $modalId }}')">
            <i class="fas fa-times"></i>
        </button>
        <div class="flex flex-col items-center">
            <img src="{{ $product['image'] }}" alt="Product Image" class="w-32 h-32 object-cover mb-4">
            <h2 class="text-xl font-semibold mb-2">{{ $product['name'] }}</h2>
            <p class="text-gray-600 mb-2"><strong>Kategori:</strong> {{ $product['category'] }}</p>
            <p class="text-gray-600 mb-2"><strong>Harga:</strong> {{ $product['price'] }}</p>
            <p class="text-gray-600 mb-2"><strong>Toko:</strong> {{ $product['store'] }}</p>
            <p class="text-gray-600 mb-2"><strong>Tanggal Posting:</strong> {{ $product['date'] }}</p>
            <p class="text-gray-600 mb-4"><strong>Overview:</strong> {{ $product['overview'] }}</p>
            <p class="text-gray-600 mb-4"><strong>Detail:</strong> {{ $product['detail'] }}</p>
            <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mb-4">Lihat Produk</button>
            <p class="text-gray-600"><strong>Status Display:</strong> {{ $product['status'] }}</p>
        </div>
    </div>
</div>
