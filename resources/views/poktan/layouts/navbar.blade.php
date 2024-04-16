<header class="h-14 bg-gray-100 top-0 w-full fixed shadow" style="z-index: 99999;">
    <div class="flex justify-between items-center px-10 h-14">
        <div class="flex justify-between items-center gap-x-14">
            <div class="w-40 flex justify-center items-center">
                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white cursor-pointer mr-4"
                    src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
                <div>
                    <h2 class="text-md font-bold" href="#">Ahmad Rusma</h2>
                    <p class="text-gray-400 text-[12px]">
                        Poktan
                    </p>
                </div>
            </div>

            <a id="toggle-button"
                class="hidden lg:block bg-gray-200 rounded-full transition-all duration-500 ease-in-out"
                onclick="collapseSidebar()" href="#"><i class="fa-solid fa-arrow-left p-3"></i></a>
        </div>

        <ul class="flex items-center gap-5">
            <li class="" onclick="openUserDropdown()">
                <h1>Logo</h1>
                <ul id="user-dropdown" class="absolute hidden bg-white right-4 top-14 w-28 rounded shadow-md">
                    <li class="mb-1 hover:bg-gray-50 text-gray-700 hover:text-gray-900"><a class="block px-5 py-2"
                            href="#">Profile</a></li>
                    <li class="mb-1 hover:bg-gray-50 text-gray-700 hover:text-gray-900"><a class="block px-5 py-2"
                            href="#">Settings</a></li>
                    <li class="mb-1 hover:bg-gray-50 text-gray-700 hover:text-gray-900"><a class="block px-5 py-2"
                            href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>
