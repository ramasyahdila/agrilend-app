<aside id="sidebar"
    class="w-[60px] lg:w-[240px] h-[calc(100vh-120px)] whitespace-nowrap fixed shadow overflow-x-hidden transition-all duration-500 ease-in-out">
    <div class="flex flex-col justify-between h-full">
        <ul class="flex flex-col gap-1 mt-2">
            <li class="text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                <a class="w-full flex items-center py-3" href="#">
                    <i class="fa-solid fa-house text-center px-5"></i>
                    <span class="whitespace-nowrap pl-1">Beranda</span>
                </a>
            </li>

            <li class="text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                <a class="w-full flex items-center py-3" href="#">
                    <i class="fa-solid fa-chart-line text-center px-5"></i>
                    <span class="whitespace-nowrap pl-1">Akun</span>
                </a>
            </li>

            <li class="text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                <a class="w-full flex items-center py-3" href="{{ route('partner.dashboard.pengajuan') }}">
                    <i class="fa-solid fa-users text-center px-5"></i>
                    <span class="whitespace-nowrap pl-1">Peminjaman</span>
                </a>
            </li>
            <li class="text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                <a class="w-full flex items-center py-3" href="#">
                    <i class="fa-solid fa-users text-center px-5"></i>
                    <span class="whitespace-nowrap pl-1">Pengembalian</span>
                </a>
            </li>
            <li class="text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                <a class="w-full flex items-center py-3" href="#">
                    <i class="fa-solid fa-users text-center px-5"></i>
                    <span class="whitespace-nowrap pl-1">Notifikasi</span>
                </a>
            </li>
            <li class="text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                <a class="w-full flex items-center py-3" href="#">
                    <i class="fa-solid fa-users text-center px-5"></i>
                    <span class="whitespace-nowrap pl-1">Setelan</span>
                </a>
            </li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </div>
</aside>
