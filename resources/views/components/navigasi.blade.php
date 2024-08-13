<nav class="w-full h-20 bg-primary flex items-center fixed top-0 left-0 z-50 shadow-sm">
    <img src="img/Katalog.svg" alt="Katalog" class="ml-8% w-15% mr-17">
    <ul class="list-none flex gap-1.9 mr-3.6">
        <li><a href="/homepage" class="{{ request()->is('homepage') ? 'font-bold font-sans' : 'font-all'}} text-secondary no-underline text-1.6">Beranda</a></li>
        <li><a href="/product" class="{{ request()->is('product') ? 'font-bold font-sans' : 'font-all'}} text-secondary no-underline text-1.6">Produk</a></li>
        <li><a href="/contact" class="{{ request()->is('contact') ? 'font-bold font-sans' : 'font-all'}} text-secondary no-underline text-1.6">Kontak</a></li>
    </ul>
    <div class="flex mr-3.6">
        <form class="flex mr-0.5">
            <input class=" outline-none h-8 pl-1 pr-4.1 rounded-1 border text-inter text- border-greys bg-transparent transition ease-in-out duration-80 z-50 text-placenav cursor-pointer text-input font-all tracking-wide" type="text" placeholder="Cari produk pilihanmu">
            <img class="absolute w-1.7 mt-2 ml-17.2 "src="img/Search.svg" alt="Search">
        </form>
        <button class="font-inter tracking-wide w-8 rounded-1 h-8 bg-secondary text-1.7 text-white cursor-pointer hover:bg-seconhvr">Masuk</button>
    </div>
</nav>