<div class="container max-w-6xl flex flex-wrap items-center justify-between mx-auto ">
    <a href="{{ url('/') }}" class="flex items-center">
        {{-- <img src="{{ asset('images/frontpage/logo.webp') }}" class="h-5 ml-3 sm:h-9" alt="Setara Logo"> --}}
        <span class="self-center text-xl text-white font-semibold whitespace-nowrap ">ستارا</span>
    </a>
    <div class="flex md:order-2 gap-2">


        @if (Auth::check())
            <a href="{{ url('/profile') }}"
                class="flex items-center py-2 pl-3 pr-4 text-white bg-gray-700 rounded md:bg-transparent  md:p-0">
                <img src="{{ asset('images/character.jpg') }}"
                    class="w-8 6 fl6 md:h-8 md:w-8x rounded ml-1 border-2 group-hover:border-teal-500"
                    alt=""> {{ Auth::user()->name ? Auth::user()->name : 'پروفایل کاربری' }}

            </a>

            <a href="/logout"
                class=" bg-orange-300 text-gray-800 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">خروج</a>
        @else
            <a href="/login"
                class=" bg-orange-300 text-gray-800 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">ورود / ثبت‌نام</a>
        @endif
        {{-- <a href="#live-preview"
            class=" bg-orange-300 text-gray-800 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0   ">پیش‌نمایش</a> --}}
        <button data-collapse-toggle="navbar-sticky" type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200   "
            aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul
            class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg  md:flex-row md:gap-8 md:mt-0 md:text-sm md:font-medium md:border-0 text-white ">
            <li class="">
                <a href="{{ route('home') }}"
                    class="block py-2 pl-3 pr-4 text-white bg-gray-700 rounded md:bg-transparent  md:p-0 "
                    aria-current="page">خانه</a>
            </li>

            <li class="">
                <a href="{{ route('stylists.index') }}"
                    class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0     md::border-gray-700">
                    استایلیست‌ها
                </a>
            </li>
            <li class="">
                <a href="{{ route('about') }}"
                    class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0     md::border-gray-700">
                    دربارهٔ ما    
                </a>
            </li>
            <li class="">
                <a href="#"
                    class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0     md::border-gray-700">تیم
                    ما</a>
            </li>
            <li class="">
                <a href="#"
                    class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0     md::border-gray-700">قیمت‌گذاری</a>
            </li>
        </ul>
    </div>
</div>