<nav class="w-full fixed top-0 left-0 bg-white backdrop-blur-xl shadow-md z-50">
    <div class="max-w-7xl mx-auto py-1 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo & Text -->
            <div class="flex items-center space-x-2">
                <img src="{{ asset('img/logo.webp') }}" alt="Logo" class="h-10 w-10">
                <span class="font-semibold text-lg text-blue-900">Maritim Nusa Dewata</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-2">
                <a href="{{ route('home') }}"
                   class="p-4 {{ request()->routeIs('home') ? 'text-blue-600 font-bold' : 'hover:text-blue-600' }}">
                    Home
                </a>

                <a href="{{ route('about') }}"
                   class="p-4 {{ request()->routeIs('about') ? 'text-blue-600 font-bold' : 'hover:text-blue-600' }}">
                    About
                </a>

                <!-- Dropdown -->
                <div class="relative group">
                    <button
                        class="py-4 {{ request()->is('program/*') ? 'text-blue-600 font-bold' : 'hover:text-blue-600' }}">
                        Program
                    </button>
                    <div class="absolute left-0 top-[100%] hidden group-hover:block overflow-hidden bg-white shadow-xl rounded-md w-56">
                        <a href="{{ route('program.fnb') }}"
                           class="block px-4 py-2 {{ request()->routeIs('program.fnb') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                            Food & Beverage Service
                        </a>
                        <a href="{{ route('program.culinary') }}"
                           class="block px-4 py-2 {{ request()->routeIs('program.culinary') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                            Culinary / Cook
                        </a>
                        <a href="{{ route('program.housekeeping') }}"
                           class="block px-4 py-2 {{ request()->routeIs('program.housekeeping') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                            Housekeeping
                        </a>
                        <a href="{{ route('program.barista') }}"
                           class="block px-4 py-2 {{ request()->routeIs('program.barista') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                            Barista
                        </a>
                        <a href="{{ route('program.premium') }}"
                           class="block px-4 py-2 {{ request()->routeIs('program.premium') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                            Premium Class
                        </a>
                        <a href="{{ route('program.executive') }}"
                           class="block px-4 py-2 {{ request()->routeIs('program.executive') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                            Executive Class
                        </a>
                        <a href="{{ route('program.butler') }}"
                           class="block px-4 py-2 {{ request()->routeIs('program.butler') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                            Butler
                        </a>
                    </div>
                </div>

                <a href="{{ route('gallery') }}"
                   class="p-4 {{ request()->routeIs('gallery') ? 'text-blue-600 font-bold' : 'hover:text-blue-600' }}">
                    Gallery
                </a>

                <a href="{{ route('blog') }}"
                   class="p-4 {{ request()->routeIs('blog') ? 'text-blue-600 font-bold' : 'hover:text-blue-600' }}">
                    Blog
                </a>
            </div>

            <!-- Register Button -->
            <div class="hidden md:block">
                <a href="{{ route('register') }}"
                   class="px-4 py-2 gradient-btn text-white rounded-full {{ request()->routeIs('register') ? 'bg-blue-700' : 'hover:bg-blue-700' }}">
                    Daftar Sekarang
                </a>
            </div>

            <!-- Mobile Hamburger -->
            <div class="md:hidden">
                <button id="menu-btn" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-lg">
        <a href="{{ route('home') }}"
           class="block px-4 py-2 {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
            Home
        </a>
        <a href="{{ route('about') }}"
           class="block px-4 py-2 {{ request()->routeIs('about') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
            About
        </a>
        <div>
            <button id="mobile-dropdown-btn"
                    class="w-full text-left px-4 py-2 {{ request()->is('program/*') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                Program
            </button>
            <div id="mobile-dropdown" class="hidden">
                <a href="{{ route('program.fnb') }}"
                   class="block px-6 py-2 {{ request()->routeIs('program.fnb') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Food & Beverage Service
                </a>
                <a href="{{ route('program.culinary') }}"
                   class="block px-6 py-2 {{ request()->routeIs('program.culinary') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Culinary / Cook
                </a>
                <a href="{{ route('program.housekeeping') }}"
                   class="block px-6 py-2 {{ request()->routeIs('program.housekeeping') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Housekeeping
                </a>
                <a href="{{ route('program.barista') }}"
                   class="block px-6 py-2 {{ request()->routeIs('program.barista') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Barista
                </a>
                <a href="{{ route('program.premium') }}"
                   class="block px-6 py-2 {{ request()->routeIs('program.premium') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Premium Class
                </a>
                <a href="{{ route('program.executive') }}"
                   class="block px-6 py-2 {{ request()->routeIs('program.executive') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Executive Class
                </a>
                <a href="{{ route('program.butler') }}"
                   class="block px-6 py-2 {{ request()->routeIs('program.butler') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Butler
                </a>
            </div>
        </div>
        <a href="{{ route('gallery') }}"
           class="block px-4 py-2 {{ request()->routeIs('gallery') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
            Gallery
        </a>
        <a href="{{ route('blog') }}"
           class="block px-4 py-2 {{ request()->routeIs('blog') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
            Blog
        </a>
        <a href="{{ route('register') }}"
           class="block px-4 py-2 {{ request()->routeIs('register') ? 'bg-blue-700 text-white' : 'bg-blue-600 text-white hover:bg-blue-700' }}">
            Register Now
        </a>
    </div>
</nav>

<script>
    // Toggle Mobile Menu
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Toggle Mobile Dropdown
    const mobileDropdownBtn = document.getElementById('mobile-dropdown-btn');
    const mobileDropdown = document.getElementById('mobile-dropdown');
    mobileDropdownBtn.addEventListener('click', () => {
        mobileDropdown.classList.toggle('hidden');
    });
</script>
