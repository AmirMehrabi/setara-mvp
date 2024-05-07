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
        <div class="mt-12 md:mt-0 max-w-6xl mx-auto flex  sm:items-center py-4 sm:pt-0  min-h-screen">

            <div class=" bg-white  overflow-hidden ">
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
                                <img src="{{ asset('images/frontpage/section1.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-12 bg-purple-300 md:mt-0  mx-auto grid grid-cols-1 lg:grid-cols-5 gap-1  sm:items-center p-10 md:p-20"
            id="live-preview">

            <div
                class="drop-shadow-md p-6 relative h-100 flex col-span-2 flex-col rounded-xl h-full items-center bg-white bg-clip-border text-gray-700 shadow-lg mx-auto">

                <div class="flex flex-col lg:flex-row items-center justify-between h-full">

                    <div class="w-1/3">
                        <img src="{{ asset('images/stylists/faride.jpg') }}"
                            class="w-full object-cover rounded-full lg:rounded mb-2 lg:mb-0" alt="">
                    </div>

                    <div class="w-full lg:w-2/3 lg:pr-2 flex flex-col place-content-around h-full">
                        <div>
                            <h5
                                class="flex font-sans text-xl antialiased font-medium leading-snug tracking-normal text-blue-gray-900">
                                فریده فاطمی

                                <span
                                    class="flex items-center gap-1.5 font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="-mt-0.5 h-5 w-5 text-purple-700">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    ۵.۰
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
                                با سابقه‌ای ده ساله در زمینه‌ٔ مد و لباس، فریده به شما کمک می‌کند تا ایده‌های
                                مدل‌سازی و لباس‌ها را تجزیه و تحلیل کنید و همچنین خرید آنلاین شخصی را انجام دهید..
                            </p>

                        </div>

                        <div class="mr-auto">
                            <a href="#" class="flex">ادامه

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-arrow-left">
                                    <line x1="19" y1="12" x2="5" y2="12"></line>
                                    <polyline points="12 19 5 12 12 5"></polyline>
                                </svg>
                            </a>
                        </div>



                    </div>

                </div>

            </div>

            {{-- Start of datepicker --}}
            <!-- Calendar -->
            <div class="space-y-0.5 drop-shadow-md bg-white rounded-xl h-full hidden lg:block">
                <!-- Months -->
                <div class="grid grid-cols-5 items-center gap-x-3 mx-1.5 pb-3">
                    <!-- Prev Button -->
                    <div class="col-span-1">

                    </div>
                    <!-- End Prev Button -->

                    <!-- Month / Year -->
                    <div class="col-span-3 flex justify-center items-center gap-x-1">
                        <div class="relative">
                            <select
                                data-hs-select='{
              "placeholder": "Select month",
              "viewport": "#single-datepicker-tab-preview-datepicker",
              "toggleTag": "<button type=\"button\"></button>",
              "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600 before:absolute before:inset-0 before:z-[1]   ",
              "dropdownClasses": "mt-2 z-50 w-32 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500  ",
              "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100    dark:focus:bg-neutral-800",
              "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-gray-800 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
            }'
                                class="hidden">
                                <option value="0">فروردین</option>
                                <option value="1">اردیبهشت</option>
                                <option value="2">خرداد</option>
                                <option value="3">تیر</option>
                                <option value="4">مرداد</option>
                                <option value="5">شهریور</option>
                                <option value="6" selected="">مهر</option>
                                <option value="7">آبان</option>
                                <option value="8">آذر</option>
                                <option value="9">دی</option>
                                <option value="10">بهمن </option>
                                <option value="11">اسفند</option>
                            </select>
                        </div>

                        اردببهشت

                        <div class="relative">
                            <select
                                data-hs-select='{
              "placeholder": "Select year",
              "viewport": "#single-datepicker-tab-preview-datepicker",
              "toggleTag": "<button type=\"button\"></button>",
              "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600 before:absolute before:inset-0 before:z-[1]   ",
              "dropdownClasses": "mt-2 z-50 w-20 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500  ",
              "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100    dark:focus:bg-neutral-800",
              "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-gray-800 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
            }'
                                class="hidden">
                                <option selected="">2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Month / Year -->

                    <!-- Next Button -->
                    <div class="col-span-1 flex justify-end">

                    </div>
                    <!-- End Next Button -->
                </div>
                <!-- Months -->

                <!-- Weeks -->
                <div class="flex place-content-around pb-1.5">
                    <span class="m-px w-10 block text-center text-sm text-gray-500 ">
                        ش
                    </span>
                    <span class="m-px w-10 block text-center text-sm text-gray-500 ">
                        ی
                    </span>
                    <span class="m-px w-10 block text-center text-sm text-gray-500 ">
                        د
                    </span>
                    <span class="m-px w-10 block text-center text-sm text-gray-500 ">
                        س
                    </span>
                    <span class="m-px w-10 block text-center text-sm text-gray-500 ">
                        چ
                    </span>
                    <span class="m-px w-10 block text-center text-sm text-gray-500 ">
                        پ
                    </span>
                    <span class="m-px w-10 block text-center text-sm text-gray-500 ">
                        ج
                    </span>
                </div>
                <!-- Weeks -->

                <!-- Days -->
                <div class="flex place-content-around">
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   "
                            disabled="">
                            26
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   "
                            disabled="">
                            27
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   "
                            disabled="">
                            28
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   "
                            disabled="">
                            29
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   "
                            disabled="">
                            30
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            1
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            2
                        </button>
                    </div>
                </div>
                <!-- Days -->

                <!-- Days -->
                <div class="flex place-content-around">
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            3
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            4
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            5
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            6
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            7
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            8
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            9
                        </button>
                    </div>
                </div>
                <!-- Days -->

                <!-- Days -->
                <div class="flex place-content-around">
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            10
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            11
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            12
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            13
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            14
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            15
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            16
                        </button>
                    </div>
                </div>
                <!-- Days -->

                <!-- Days -->
                <div class="flex place-content-around">
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            17
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            18
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            19
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center bg-blue-600 border border-transparent text-sm font-medium text-white hover:border-blue-600 rounded-full  disabled:text-gray-300 disabled:pointer-events-none ">
                            20
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            21
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            22
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            23
                        </button>
                    </div>
                </div>
                <!-- Days -->

                <!-- Days -->
                <div class="flex place-content-around">
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            24
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            25
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            26
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            27
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            28
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            29
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            30
                        </button>
                    </div>
                </div>
                <!-- Days -->

                <!-- Days -->
                <div class="flex place-content-around">
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   ">
                            31
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   "
                            disabled="">
                            1
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   "
                            disabled="">
                            2
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   "
                            disabled="">
                            3
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   "
                            disabled="">
                            4
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   "
                            disabled="">
                            5
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="m-px size-8 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none   "
                            disabled="">
                            6
                        </button>
                    </div>
                </div>
                <!-- Days -->
            </div>
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
