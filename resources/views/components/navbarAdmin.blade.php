<div class="bg-[#39586D] h-14 w-screen flex sticky lg:hidden items-center justify-between">
    <div class=" text-white py-2.5 px-4 my-4 rounded" href="#">
        <img src="img/katalogadmin.svg" alt="Katalog" class="w-20 h-8">
    </div>
    <div class="flex-grow"></div>
    <button class="text-white p-4" id="hamburger">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff">
            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
        </svg>
    </button>
</div>


<div id="sidebar"
    class="p-2 bg-[#39586D] w-60 flex flex-col h-full min-h-screen fixed transition-transform duration-200 lg:translate-x-0 -translate-x-full">
    <nav>
        <div class=" text-white py-2.5 px-4 my-4 rounded" href="#">
            <img src="img/katalogadmin.svg" alt="Katalog" class="w-32 h-8">
        </div>
        <a class=" text-white py-2.5 px-4 my-4 rounded transition duration-200 flex items-center space-x-2"
            href="{{ url('/admin') }}">
            <img src="img/admhome.svg" alt="DashboardAdmin" class="h-6 mr-2">
            <span class="relative group pb-1">Dashboard
                <span
                    class="absolute left-0 bottom-0 w-full h-0.4 bg-white transform scale-x-0 transition-transform duration-200 {{ request()->is('admin') ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
            </span>
        </a>
        <a class=" text-white py-2.5 px-4 my-4 rounded transition duration-200 flex items-center space-x-2"
            href="{{ url('/produkadmin') }}">
            <img src="img/admproduk.svg" alt="ProdukAdmin" class="h-6 mr-2">
            <span class="relative group pb-1">Produk
                <span
                    class="absolute left-0 bottom-0 w-full h-0.4 bg-white transform scale-x-0 transition-transform duration-200 {{ request()->is('produkadmin') ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
            </span>
        </a>
        <a class=" text-white py-2.5 px-4 my-4 rounded transition duration-200 flex items-center space-x-2"
            href="{{ url('/tokoadmin') }}">
            <img src="img/admtoko.svg" alt="TokoAdmin" class="h-6 mr-2">
            <span class="relative group pb-1">Toko
                <span
                    class="absolute left-0 bottom-0 w-full h-0.4 bg-white transform scale-x-0 transition-transform duration-200 {{ request()->is('tokoadmin') ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
            </span>
        </a>
        <a class=" text-white py-2.5 px-4 my-4 rounded transition duration-200 flex items-center space-x-2"
            href="{{ route('profiladmin.index') }}">
            <img src="img/admprofil.svg" alt="ProfilAdmin" class="h-6 mr-2">
            <span class="relative group pb-1">Profil Admin
                <span
                    class="absolute left-0 bottom-0 w-full h-0.4 bg-white transform scale-x-0 transition-transform duration-200 {{ request()->is('profiladmin') ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
            </span>
        </a>
    </nav>
</div>

<script>
    const hamburger = document.getElementById('hamburger');
    const sidebar = document.getElementById('sidebar');

    hamburger.addEventListener('click', () => {
        // Toggle the sidebar visibility
        sidebar.classList.toggle('-translate-x-full');
        sidebar.classList.toggle('translate-x-0');
    });
</script>

<style>
    @media (min-width: 1024px) {

        /* Adjust this breakpoint as needed */
        #sidebar {
            transform: translateX(0);
        }
    }
</style>
