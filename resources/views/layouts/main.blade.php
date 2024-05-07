<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ستارا - خانه</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

</head>

<body class="antialiased font-serif">
    <div id="app">

        <nav class="bg-white px-2 sm:px-4 py-2.5 w-full  fixed z-20 top-0 left-0 border-gray-200 ">
            @include('partials.navbar')
        </nav>


        @yield('content')


    



        <footer class="max-w-6xl rounded-lg  mx-auto">


            <div
                class=" w-full mx-auto border-gray-300  border-t px-2 py-4 md:py-6 md:flex md:items-center md:justify-between ">
                <span class="text-sm text-gray-500 sm:text-center ">© ۱۴۰۳ <a href="http://setara.app/"
                        class="hover:underline">ستارا</a>. تمامی حقوق محفوظ است
                </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500  sm:mt-0">
                    <li>
                        contact@setara.style
                        {{-- <a href="#" class="mr-4 hover:underline md:ml-6 ">About</a> --}}
                    </li>
                    {{-- <li>
                        <a href="#" class="mr-4 hover:underline md:ml-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:ml-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li> --}}
                </ul>
            </div>

        </footer>

        {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    </div>
</body>


@yield('footer-assets')

</html>





