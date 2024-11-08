@props(['Terpopuler'])
<div class="container mx-auto my-auto">
    <div class="container flex items-center justify-center z-1">
        <div class="container px-full py-5 mr-8 ml-8 overflow:hidden">
            <h1 class="text-secondary text-3.2 font-medium tracking-wider text-center">Paling banyak dicari</h1>
            <div class="mt-5 grid grid-cols-1 md:grid-cols-3 gap-13.8">
                @foreach ($Terpopuler as $data)
                    <div class="bg-white rounded-lg shadow-xl overflow-hidden mb-4 flex flex-col">
                        <div class="relative p-4 flex-grow">
                            <div class="absolute top-2 right-2">
                                <div
                                    class="ml-2 vh py-2 px-2 text-sans tracking-wider text-1.2 text-white bg-iconstyle rounded-full">
                                    {{ $data->kategori->kategori }}
                                </div>
                            </div>
                            <div class="flex items-center justify-center">
                                <div class="block">
                                    <img class="mt-2 w-5/6 h-42" src="{{ asset($data->fotoproduk) }}"
                                        class="rounded-lg">
                                    <div class="w-full h-0.4 bg-shadow mx-auto"></div>
                                </div>
                            </div>
                            <p class="ml-2 mt-2 text-secondary font-extrabold text-1.4">
                                {{ Str::limit($data->namaproduk, 15) }}</p>
                            <div class="ml-2 text-secondary text-1.6">Rp
                                {{ number_format($data->hargaproduk, 0, ',', '.') }}</div>
                        </div>
                        <div class="p-4">
                            <a href="/detail-product-guest/{{ $data->id }}"
                                class="block text-center bg-iconstyle text-white py-2 rounded-lg">Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
