<nav class="w-full h-[19vh] bg-primary flex items-center fixed top-0 left-0 z-50 shadow-sm">
    <img src="img/Katalog.svg" alt="Katalog" class="ml-[8%] w-[15%] mr-[17vw]">
    <ul class="list-none flex gap-[1.9vw] mr-[3.6vw]">
        <li><a href="/homepage" class="{{ request()->is('homepage') ? 'font-bold font-sans text-[1.7vw]' : 'font-all'}} text-secondary no-underline text-[1.6vw]">Beranda</a></li>
        <li><a href="/product" class="{{ request()->is('product') ? 'font-bold font-sans text-[1.7vw]' : 'font-all'}} text-secondary no-underline text-[1.6vw]">Produk</a></li>
        <li><a href="/contact" class="{{ request()->is('contact') ? 'font-bold font-sans text-[1.7vw]' : 'font-all'}} text-secondary no-underline text-[1.6vw]">Kontak</a></li>
    </ul>
    <div class="flex mr-[3.6vw] mr-8%">
        <form class="flex mr-[0.5vw]">
            <input class=" outline-none h-[8vh] pl-[1vw] pr-[5.5vw] rounded-1 border text-inter border-greys bg-transparent transition ease-in-out duration-80 z-50 text-placenav cursor-pointer text-1 font-all tracking-wide" type="text" placeholder="Cari produk pilihanmu">
            <img class="absolute w-[1.7vw] mt-[2vh] ml-17.2 mr-9%"src="img/Search.svg" alt="Search">
        </form>
        <button class="font-inter tracking-wide w-[8vw] rounded-1 h-[8vh] bg-secondary text-[1.7vw] text-white cursor-pointer hover:bg-seconhvr">Masuk</button>
    </div>
</nav>