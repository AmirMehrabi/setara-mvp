@extends('layouts.main')

@section('title', 'صفحه نخست')


@section('content')
    <div class=" mx-auto flex  sm:items-center py-4 sm:pt-0  min-h-screen bg-sunglow-300">


        <div class="overflow-hidden  max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                <div class="p-6">
                    <div class=" text-center lg:text-right">
                        <div class=" text-gray-600">
                            <h2 class="font-bold text-2xl lg:text-4xl text-black leading-relaxed rounded p-3">
                                استایلیست شخصی شما، در همین نزدیکی‌ها
                            </h2>

                            <h5 class="text-lg mt-5 text-black leading-relaxed rounded p-3"> به دنبال مشاوره مد هستید؟ به
                                دنبال یک لباس ایده‌آل یا یک کمد لباس کامل؟ ما اینجاهستیم که به شما کمک کنیم تا ظاهری زیبا و
                                احساسی فوق‌العاده داشته باشید.</h5>

                        </div>
                    </div>
                </div>

                <div class="p-6 border-gray-200  ">

                    <div class="">
                        <div class=" text-gray-600  text-sm">
                            <img src="{{ asset('images/frontpage/hero.jpg') }}" class="rounded-t-full rounded-b-full"
                                alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- <div class="container mx-auto p-6">
        <div class="flex items-stretch flex-col lg:flex-row gap-5 ">
            <div class="flex-1 p-4">
                <div class="block bg-white overflow-hidden border-2 h-full">
                    <div class="p-4">
                        <h2 class="mt-2 mb-2 font-bold text-2xl font-Headingg">
                            Card Name
                        </h2>
                        <div class="mb-4 flex flex-wrap">
                            <span class="mr-2">Link 1</span>
                            <span>Link 2</span>
                        </div>

                        <p class="text-md text-justify">Some Description</p>
                    </div>
                    <div class="p-4 flex flex-wrap items-center">
                        <p class="px-1 py-2 tracking-wide text-xs mr-2 mb-2">Tag #1</p>
                        <p class="px-1 py-2 tracking-wide text-xs mr-2 mb-2">Tag #2</p>
                    </div>
                </div>
            </div>

            <div class="flex-1 p-4">
                <div class="block bg-white overflow-hidden border-2 h-full">
                    <div class="p-4">
                        <h2 class="mt-2 mb-2 font-bold text-2xl font-Headingg">
                            Card Name
                        </h2>
                        <div class="mb-4 flex flex-wrap">
                            <span class="mr-2">Link 1</span>
                            <span>Link 2</span>
                        </div>

                        <p class="text-md text-justify">Some Description Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Maecenas vel enim lectus.</p>
                    </div>
                    <div class="p-4 flex flex-wrap items-center">
                        <p class="px-1 py-2 tracking-wide text-xs mr-2 mb-2">Tag #1</p>
                        <p class="px-1 py-2 tracking-wide text-xs mr-2 mb-2">Tag #2</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="mt-12 bg-white md:mt-0   lg:flex-row gap-5  p-10 md:p-20" id="live-preview">

        <h2 class="font-bold text-xl lg:text-2xl text-black leading-relaxed rounded p-3">
            ستارا چگونه کار می‌کند
        </h2>

        <ol class="relative border-s border-gray-200 dark:border-gray-700">                  
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">رزرو جلسه استایلینگ</h3>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                    <p>
                        برای رزرو جلسه استایلینگ این فرم را تکمیل کنید یا در
                            <a href="https://t.me/setara_style" target="_blank" onclick="openInApp(event, 'tg://resolve?domain=setara_style')">
                            تلگرام</a>
                            یا
                            <a href="https://instagram.com/setara_style" target="_blank" onclick="openInApp(event, 'instagram://user?username=setara_style')">
اینستاگرام</a> پیام بدید.
                        </p>
                </p>
                <a href="https://t.me/setara_style" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">تلکرام <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg></a>
          <a href="https://instagram.com/setara_style" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">اینستاگرام <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg></a>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                {{-- <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2022</time> --}}
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">ثبت‌نام استایلیست</h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    اگر به عنوان یک استایلیست حرفه‌ای فعالیت شغلی دارید، با پیوستن به ستارا دنیای مد و استایل را با خلاقیت خود متحول کنید. همین حالا ثبت‌نام کنید و به جمع بهترین‌ها بپیوندید!
                </p>
            </li>
            <li class="ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                {{-- <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April 2022</time> --}}
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">تماس با ما
                </h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">برای هرگونه سوال یا درخواست اطلاعات بیشتر، می‌توانید از طریق ایمیل با ما در ارتباط باشید. تیم ما در سریع‌ترین زمان ممکن پاسخ‌گوی شما خواهد بود.

                </p>
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">info@setara.style
                    </a>

                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">تلگرام
                    </a>

                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">اینستاگرام
                    
                    </a>
            </li>
        </ol>
        <!-- End Calendar -->
        {{-- End of datepicker --}}
    </div>


    <div class="mx-auto flex  sm:items-center py-4 sm:pt-0   bg-sunglow-300 p-10 md:p-20 mt-12 md:mt-0">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            @foreach (\App\Models\Stylist::all()->random(3) as $item)
                <div
                    class="box-shadow drop-shadow bg-gray-50 p-2 sm:p-4 lg:p-5  rounded-lg items-center  bg-clip-border text-gray-700 shadow-lg">
                    <div class="flex col-span-2 flex-col h-full">
                        <img src="{{ asset($item->avatar) }}" class="w-24 object-cover mx-auto rounded-full mb-2 lg:mb-0 aspect-square"
                        alt="">
                    <div class="flex flex-col lg:flex-row items-center justify-between h-full">
    
    
    
    
                        <div class="w-full lg:pr-2 flex flex-col place-content-around h-full">
                            <div class="text-center">
                                <h5
                                    class="flex items-center content-center justify-center font-sans text-xl antialiased font-medium leading-snug tracking-normal text-blue-gray-900">
                                    {{ $item->name }}
    
                                    <span
                                        class="flex items-center gap-1.5 font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased">
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="-mt-0.5 h-5 w-5 text-orange-700">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ $item->rate }} --}}
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
    
                            <div class="mr-auto mt-2">
                                <a href="{{ route('stylists.show', $item->id) }}" class="flex bg-black text-white hover:text-gray-200 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm p-1 text-center">ادامه
    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-arrow-left">
                                        <line x1="19" y1="12" x2="5" y2="12"></line>
                                        <polyline points="12 19 5 12 12 5"></polyline>
                                    </svg>
                                </a>
                            </div>
    
    
    
                        </div>
    
                    </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
