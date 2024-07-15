@extends('layouts.main')

@section('title', 'استایلیست‌ها')
    
@section('content')
    
<div class="mt-12 md:mt-0 mx-auto flex flex-col  sm:items-center py-4 sm:pt-0  bg-orange-50">



  <div class="   overflow-hidden  max-w-6xl mx-auto">

      <nav class="flex items-start ml-auto my-10 text-xl" aria-label="Breadcrumb">
          <ol class="inline-flex space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
              <a href="#" class="inline-flex items-center text-lg font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                خانه
              </a>
            </li>
            {{-- <li>
              <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <a href="#" class="ms-1 text-lg font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">استایلیست‌ها</a>
              </div>
            </li> --}}
            <li aria-current="page">
              <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ms-1 text-lg font-medium text-gray-500 md:ms-2 dark:text-gray-400">استایلیست‌ها</span>
              </div>
            </li>
          </ol>
        </nav>

        <div class=" my-5">

          <div class="flex flex-col">
            <div class="rounded-xl border border-gray-200 bg-white p-6 my-auto">
              {{-- <form class=""> --}}
                {{-- <div class="relative mb-10 w-full flex  items-center justify-between rounded-md">
                  <svg class="absolute left-2 block h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" class=""></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65" class=""></line>
                  </svg>
                  <input type="name" name="search" class="h-12 w-full cursor-text rounded-md border border-gray-100 bg-gray-100 py-4 shadow-sm outline-none text-xl focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" placeholder="جستجو بر اساس نام استایلیست،" />
                </div> --}}
        
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                  <div class="flex flex-col">
                    {{-- <label for="name" class="text-sm font-medium text-stone-600">Name</label> --}}
                    <input type="text" id="name" placeholder="نام استایلیست" class="mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 pl-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                  </div>
        
                  <div class="flex flex-col">
                    {{-- <label for="manufacturer" class="text-sm font-medium text-stone-600">Manufacturer</label> --}}
        
                    <select id="manufacturer" class="mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 pl-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                      <option>استایلیست شخصی</option>
                      <option>دستیار خرید</option>
                      {{-- <option>Hilti</option> --}}
                    </select>
                  </div>
        
                  <div class="flex flex-col">
                    {{-- <label for="date" class="text-sm font-medium text-stone-600">Date of Entry</label> --}}
                    <input type="date" id="date" class="mt-2 block w-full cursor-pointer rounded-md border border-gray-100 bg-gray-100 pl-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                  </div>
        
                  {{-- <div class="flex flex-col">
                    <label for="status" class="text-sm font-medium text-stone-600">Status</label>
        
                    <select id="status" class="mt-2 block w-full cursor-pointer rounded-md border border-gray-100 bg-gray-100 pl-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                      <option>Dispached Out</option>
                      <option>In Warehouse</option>
                      <option>Being Brought In</option>
                    </select>
                  </div> --}}
                  <div class="flex flex-col md:flex-row gap-1">
                      <button class="rounded-lg bg-gray-200 px-8 mt-2 py-2 font-medium text-gray-700 outline-none hover:opacity-80 focus:ring">بازنشانی</button>

                      <button class="rounded-lg mt-2 w-full bg-blue-600 px-8 py-2 font-medium text-white outline-none hover:opacity-80 focus:ring">جستجو</button>
                  </div>
                </div>
        
                {{-- <div class="mt-6 grid w-full grid-cols-2 justify-end space-x-4 md:flex">
                  
                </div> --}}
              {{-- </form> --}}
            </div>
          </div>
          
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-4">
          @foreach (\App\Models\Stylist::all() as $item)
              <div
                  class="box-shadow drop-shadow bg-gray-50 p-2 sm:p-4 lg:p-5  rounded-lg items-center  bg-clip-border text-gray-700 shadow-lg">
                  <div class="flex col-span-2 flex-col h-full">
                      <img src="{{ asset($item->avatar) }}" class="w-32 object-cover mx-auto rounded-full mb-2 lg:mb-0 aspect-square"
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
</div>



@endsection