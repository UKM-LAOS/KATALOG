<nav class="w-full h-16 bg-primary flex items-center fixed top-0 left-0 z-50 shadow-sm px-6">
    <img src="img/Katalog.svg" alt="Katalog" class="w-24 mr-auto">
    
    <ul class="list-none flex gap-6 mr-8">
        <li><a href="/homepage" class="{{ request()->is('homepage') ? 'font-bold font-sans text-base' : 'font-medium font-sans text-base'}} text-secondary no-underline text-base">Beranda</a></li>
        <li><a href="/product" class="{{ request()->is('product') ? 'font-bold font-sans text-base' : 'font-medium font-sans text-base'}} text-secondary no-underline text-base">Produk</a></li>
        <li><a href="/contact" class="{{ request()->is('contact') ? 'font-bold font-sans text-base' : 'font-medium font-sans text-base'}} text-secondary no-underline text-base">Kontak</a></li>
    </ul>
    
    <div class="flex items-center">
        <form class="relative flex items-center">
            <input class="outline-none h-10 pl-4 pr-12 rounded border text-sm border-greys bg-transparent transition duration-150 ease-in-out text-placenav" type="text" placeholder="Cari produk pilihanmu">
            <img class="absolute w-[2rem] right-2 top-1/2 transform -translate-y-1/2 cursor-pointer" src="img/Search.svg" alt="Search">
        </form>
        <a href='/login' class="font-inter tracking-wide px-4 py-2 ml-4 rounded-lg bg-secondary text-white text-base hover:bg-seconhvr">Masuk</a>
    </div>
</nav>
