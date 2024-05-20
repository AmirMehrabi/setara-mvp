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
                <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                    <div class="p-6">
                        <div class="">
                            <div class=" text-gray-600  text-sm">
                                <h2 class="font-bold text-4xl text-black leading-relaxed bg-purple-300 rounded p-3">
                                    استایلیست شخصی شما، در همین نزدیکی‌ها
                                </h2>

                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-gray-200  ">

                        <div class="">
                            <div class=" text-gray-600  text-sm">
                                <img src="{{ asset('images/frontpage/hero.jpg') }}"
                                    class="rounded-t-full rounded-b-full" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-12 bg-purple-300 md:mt-0  flex flex-col lg:flex-row gap-3 items-start p-10 md:p-20"
            id="live-preview">

            @foreach (\App\Models\Stylist::take(3)->get() as $item)
                
            <div
            class="drop-shadow-md p-2 sm:p-4 lg:p-5 relative h-100 flex col-span-2 flex-col rounded-xl h-full w-full md:w-5/6 lg:w-2/5 xl:w-1/3 items-center bg-white bg-clip-border text-gray-700 shadow-lg">

            <div class="flex flex-col lg:flex-row items-center justify-between h-full">

                <div class="w-1/3">
                    <img src="{{ asset($item->avatar) }}"
                        class="w-full object-cover rounded-full lg:rounded mb-2 lg:mb-0 aspect-square" alt="">
                </div>


                
                <div class="w-full lg:w-2/3 lg:pr-2 flex flex-col place-content-around h-full">
                    <div>
                        <h5
                            class="flex font-sans text-xl antialiased font-medium leading-snug tracking-normal text-blue-gray-900">
                            {{ $item->name }}

                            <span
                                class="flex items-center gap-1.5 font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="-mt-0.5 h-5 w-5 text-purple-700">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $item->rate }}
                            </span>
                        </h5>
                        <p>کرمان، ایران</p>
                        <div>
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded  ">استایلیست
                                شخصی</span>

                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded  ">دستیار
                                خرید</span>

                        </div>
                    </div>

                    <div class="text-sm mt-2">
                        <p>
                            {{ $item->bio }}
                        </p>

                    </div>

                    <div class="mr-auto">
                        <a href="{{ route('stylists.show', $item->id) }}" class="flex">ادامه

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg>
                        </a>
                    </div>



                </div>

            </div>

        </div>
            @endforeach


            <!-- End Calendar -->
            {{-- End of datepicker --}}
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
