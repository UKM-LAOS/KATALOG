<nav class="h-screen flex flex-col columns-1 font-serif bg-[#39586D] w-80">
    <div class="flex flex-col items-center w-full">
        <img src="img/KATALOG.png" alt="Katalog" class="place-self-start w-[75%] pt-[1.5em] pl-[1.5em]">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    {{-- Menu --}}
    <div class="grid grid-flow-row  font-sans text-4xl text-white font-extralight" x-data="{ activePath: window.location.pathname }">
        <div class="mt-[4rem] flex flex-row gap-2 pl- ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-[4rem] pb-[1rem]">
                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
              </svg>
            <a href="/admin" :class="{ 'underline-offset-8 underline': activePath === '/admin' }">Dashboard</a>
        </div>
        <div class="mt-[4rem] flex flex-col ">

            <a href="/Produk" :class="{ 'underline-offset-8 underline': activePath === '/produk' }">Produk</a>
        </div>
        <div class="mt-[4rem] flex flex-col ">

            <a href="/Toko" :class="{ 'underline-offset-8 underline': activePath === '/toko' }">Toko</a>
        </div>
        <div class="mt-[4rem] flex flex-col ">

            <a href="/Profil Admin" :class="{ 'underline-offset-8 underline': activePath === '/Profil Admin' }">Profil Admin</a>
        </div>
    </div>
</nav>
