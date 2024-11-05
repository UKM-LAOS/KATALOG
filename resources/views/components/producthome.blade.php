<<<<<<< HEAD

<div class="container mx-auto my-auto"> 
        <div class="">
            <div class="container px-full py-5 mr-8 ml-8 overflow:hidden">
                <h1 class="text-secondary text-3.2 font-medium tracking-wider text-center">Paling banyak dicari</h1>
                <div class="mt-5 grid grid-cols-1 md:grid-cols-3 gap-13.8">
                    <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                        <div class="relative p-1h p-1w">
                            <div class="absolute mt-2h right-2h">
                                <div class="ml-2vh py-0.2 px-1.6vw text-sans tracking-wider text-1.2 text-white bg-iconstyle rounded-full">Laptop</div>
=======
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
                                    class="ml-2 vh py-1 px-2 text-sans tracking-wider text-1.2 text-white bg-iconstyle rounded-full">
                                    {{ $data->kategori->kategori }}
                                </div>
>>>>>>> 8528ea42b7fb765209cea48e3bb884e1bc002246
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
                            <button
                                class="w-full h-10 text-sans tracking-wider text-1.6 text-white bg-bluebut bg-iconstyle rounded-2xl cursor-pointer hover:bg-hvrblue">Detail</button>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                        <div class="relative p-[1vh] p-[1vw]">
                            <div class="absolute mt-2h right-2h">
                                <div class="ml-2vh py-0.2 px-1.6vw text-sans tracking-wider text-1.2 text-white bg-iconstyle rounded-full">HP</div>
                            </div>
                            <div class="flex items-center justify-center">
                                <div class="block">
                                    <img class="mt-1 w-5.2 h-42" src="img/Iphone.svg" alt="Iphone Jaman Now" class="rounded-lg">
                                    <div class="w-18vw h-0.4 bg-shadow mx-auto"></div>
                                </div>
                            </div>
                            <p class="ml-2 mt-1.5 text-secondary font-extrabold text-1.4">Iphone Jaman Now</p>
                            <div class="ml-2 mb-2 text-secondary text-1.6 ">Rp. 23.000.000</div>
                            <div class="absolute mt-2h right-2h">
                                <button class="ml-30 mr-8% mb-2 w-7 h-7 text-sans tracking-wider text-1.6 text-white bg-bluebut bg-iconstyle rounded-2xl cursor-pointer hover:bg-hvrblue">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                        <div class="relative p-1h p-1w">
                            <div class="absolute mt-2h right-2h">
                                <div class="ml-2vh py-0.2 px-1.6vw text-sans tracking-wider text-1.2 text-white bg-iconstyle rounded-full">Kamera</div>
                            </div>
                            <div class="flex items-center justify-center">
                                <div class="block">
                                    <img class="mt-1 w-5.2 h-42" src="img/Kamera.svg" alt="Kamera Syuting" class="rounded-lg">
                                    <div class="w-18vw h-0.4 bg-shadow mx-auto"></div>
                                </div>
                            </div>
                            <p class="ml-2 mt-1.5 text-secondary font-extrabold text-1.4">Kamera Syuting</p>
                            <div class="ml-2 mb-2 text-secondary text-1.6 ">Rp. 15.000.000</div>
                            <div class="absolute mt-2h right-2h">
                                <button class="ml-30 mr-8% mb-2 w-7 h-7 text-sans tracking-wider text-1.6 text-white bg-bluebut bg-iconstyle rounded-2xl cursor-pointer hover:bg-hvrblue">Detail</button>
                            </div>
                            <div class="mb-8"></div>
                        </div>
                    </div>
                </div>
=======
                @endforeach
>>>>>>> 8528ea42b7fb765209cea48e3bb884e1bc002246
            </div>
        </div>
    </div>
</div>
