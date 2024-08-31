<div class="p-2 bg-[#39586D] w-60 flex flex-col h-full min-h-screen" id="sideNav">
    <nav>
        <div class="block text-white py-2.5 px-4 my-4 rounded" href="#">
            <img src="img/katalogadmin.svg" alt="Katalog" class="w-32 h-8">
        </div>
        <a class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 flex items-center space-x-2" href="{{ url('/admin') }}">
            <img src="img/admhome.svg" alt="DashboardAdmin" class="h-6 mr-2">
            <span class="relative group pb-1">Dashboard
                <span class="absolute left-0 bottom-0 w-full h-0.4 bg-white transform scale-x-0 transition-transform duration-200 {{ request()->is('admin') ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
            </span>
        </a>
        <a class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 flex items-center space-x-2" href="{{ url('/produkadmin') }}">
            <img src="img/admproduk.svg" alt="ProdukAdmin" class="h-6 mr-2">
            <span class="relative group pb-1">Produk
                <span class="absolute left-0 bottom-0 w-full h-0.4 bg-white transform scale-x-0 transition-transform duration-200 {{ request()->is('produkadmin') ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
            </span>
        </a>
        <a class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 flex items-center space-x-2" href="{{ url('/tokoadmin') }}">
            <img src="img/admtoko.svg" alt="TokoAdmin" class="h-6 mr-2">
            <span class="relative group pb-1">Toko
                <span class="absolute left-0 bottom-0 w-full h-0.4 bg-white transform scale-x-0 transition-transform duration-200 {{ request()->is('tokoadmin') ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
            </span>
        </a>
        <a class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 flex items-center space-x-2" href="{{ url('/profiladmin') }}">
            <img src="img/admprofil.svg" alt="ProfilAdmin" class="h-6 mr-2">
            <span class="relative group pb-1">Profil Admin
                <span class="absolute left-0 bottom-0 w-full h-0.4 bg-white transform scale-x-0 transition-transform duration-200 {{ request()->is('profiladmin') ? 'scale-x-100' : 'group-hover:scale-x-100' }}"></span>
            </span>
        </a>
    </nav>
</div>
