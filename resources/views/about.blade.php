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
        <div class="mt-12 md:mt-0 mx-auto flex  sm:items-center py-4 sm:pt-0  min-h-screen bg-orange-50">

            <div class="   overflow-hidden  max-w-6xl mx-auto">
                <div class=" items-center">
                    <div class="p-6">
                        <div class="">
                            <div class=" text-gray-600  text-sm gap-2 flex flex-col text-center">
                                <div class="shrink">
                                    <div class="font-bold text-4xl text-black leading-relaxed bg-purple-300 rounded p-3">
                                        ستارا
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-2xl text-gray-900 leading-relaxed bg-purple-200 rounded p-3">استایلیست شخصی شما در یک قدمی شما</h4>

                                </div>

                                <p class="text-lg text-right mt-4">
                                    در «ستارا» ما با افتخار به شما تجربه‌ای منحصر به فرد و شخصی‌سازی‌شده در دنیای مد به شما ارائه می‌دهیم. با تیمی از استایلیست‌های ماهر و همکاران فروشگاهی، به شما این امکان را می‌دهیم تا استایلیست شخصی خود را داشته باشید. 
                                </p>
                                <p class="text-lg text-right">
                                    با تغییرات کوچکی در لباس‌های موجود در کمد خود یا با انتخاب یک ست کامل جدید، می‌توانید استایل خود را به‌روز کنید. تیم استایلیست‌های ما آماده‌ی کمک به شما در انتخاب لباس‌ها و ایجاد استایلی منحصر به فرد است. 
                                </p>

                                <p class="text-lg text-right">
                                    با ستارا به دنیای استایل و زیبایی خوش آمدید، جایی که خلق و تجربه‌ی استایل شما اولویت ماست.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>




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

</html>
