@extends('layouts.main')

@section('title', $stylist->name)

@section('content')



    <section class="bg-gray-200">

        <div class=" max-w-6xl mx-auto">

            <nav class="flex items-start ml-auto py-10 text-xl" aria-label="Breadcrumb">
                <ol class="inline-flex space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route("home") }}"
                            class="inline-flex items-center text-lg font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            خانه
                        </a>
                    </li>

                    <li class="inline-flex items-center">
                        <a href="{{ route("stylists.index") }}"
                            class="inline-flex items-center text-lg font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            استایلیست‌ها
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span
                                class="ms-1 text-lg font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{ $stylist->name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>



            <div class="grid gril-cols-1 lg:grid-cols-5">
                <div>
                    <img src="{{ asset($stylist->avatar) }}" style="width: 190px; height: 230px;"
                        class="w-15 h-15 bg-gray-300 rounded-lg object-cover mb-4 shrink-0">

                </div>
                <div class="lg:col-span-4 flex flex-col">
                    <p class="text-xl text-gray-500">#{{ $stylist->id }}</p>

                    <h1 class="text-black text-2xl font-bold">{{ $stylist->name }}</h1>

                    <h3 class="text-lg my-2">استایلیست فعال و باسابقه. فعال محیط زیست</h3>
                    <h4 class="text-gray-700 text-sm">دسته‌بندی‌ها: <span class="font-semibold">شخصی</span>، <span
                            class="font-semibold">مدلینگ</span>، <span class="font-semibold">فوتوشوت</span></h4>

                </div>

            </div>




            

<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">درباره</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">تجارب کاری</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="comments-tab" data-tabs-target="#comments" type="button" role="tab" aria-controls="comments" aria-selected="false">نظرات ({{ $stylist->comments->count() }})</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="comments-tab" data-tabs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false">تحصیلات</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">رزرواسیون</button>
        </li>
    </ul>
</div>




        </div>



    </section>

    <div class="mt-12 md:mt-0 mx-auto flex flex-col  sm:items-center py-4 sm:pt-0  bg-orange-50">


        <div class="   overflow-hidden  max-w-6xl mx-auto">


            <div class=" gap-3">
                <div class="">
                    <div class="container mx-auto py-8">
                        <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">

                            <div class="col-span-4 sm:col-span-9">
                                <div id="default-tab-content">
                                    <div class="hidden bg-white shadow rounded-lg p-6" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                        <h2 class="text-xl font-bold mb-4">درباره من</h2>

                                        <p class="text-gray-700">
                                            {{ $stylist->bio }}
                                        </p>



                                        <h2 class="text-xl font-bold my-4">مهارت‌ها</h2>
                                        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">استایلیست شخصی</span>
                                        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">استایلیست فوتوشوت</span>

                                    </div>
                                    <div class="hidden bg-white shadow rounded-lg p-6" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                                    </div>
                                    <div class="hidden bg-white shadow rounded-lg p-6" id="comments" role="tabpanel" aria-labelledby="comments-tab">

                                        <section class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased">
                                            <div class="max-w-2xl mx-auto px-4">
                                                <div class="flex justify-between items-center mb-6">
                                                  <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">نظرات ({{ $stylist->comments->count() }})</h2>
                                              </div>
                                                <form  class="mb-6" action="{{ route('stylists.comments.store', $stylist) }}" method="POST">
                                                    @csrf
                                                  <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                                      <label for="comment" class="sr-only">نظرات شما</label>
                                                      <textarea id="comment" rows="6" name="comment"
                                                          class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                                          placeholder="نظرتان را بنویسید" required></textarea>
                                                  </div>
                                                  <button type="submit"
                                                      class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                                      ارسال نظر
                                                  </button>
                                              </form>
                                              {{-- <article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900">
                                                  <footer class="flex justify-between items-center mb-2">
                                                      <div class="flex items-center">
                                                          <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                                                                  class="mr-2 w-6 h-6 rounded-full"
                                                                  src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                                                  alt="Michael Gough">Michael Gough</p>
                                                          <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                                                  title="February 8th, 2022">Feb. 8, 2022</time></p>
                                                      </div>
                                                      <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                                          class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                          type="button">
                                                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                                              <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                                          </svg>
                                                          <span class="sr-only">Comment settings</span>
                                                      </button>
                                                      <!-- Dropdown menu -->
                                                      <div id="dropdownComment1"
                                                          class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                          <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                              aria-labelledby="dropdownMenuIconHorizontalButton">
                                                              <li>
                                                                  <a href="#"
                                                                      class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                              </li>
                                                              <li>
                                                                  <a href="#"
                                                                      class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                                              </li>
                                                              <li>
                                                                  <a href="#"
                                                                      class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </footer>
                                                  <p class="text-gray-500 dark:text-gray-400">Very straight-to-point article. Really worth time reading. Thank you! But tools are just the
                                                      instruments for the UX designers. The knowledge of the design tools are as important as the
                                                      creation of the design strategy.</p>
                                                  <div class="flex items-center mt-4 space-x-4">
                                                      <button type="button"
                                                          class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                                          <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                                          </svg>
                                                          Reply
                                                      </button>
                                                  </div>
                                              </article> --}}
                                              {{-- <article class="p-6 mb-3 ml-6 lg:ml-12 text-base bg-white rounded-lg dark:bg-gray-900">
                                                  <footer class="flex justify-between items-center mb-2">
                                                      <div class="flex items-center">
                                                          <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                                                                  class="mr-2 w-6 h-6 rounded-full"
                                                                  src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                                                  alt="Jese Leos">Jese Leos</p>
                                                          <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-12"
                                                                  title="February 12th, 2022">Feb. 12, 2022</time></p>
                                                      </div>
                                                      <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                                                          class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-40 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                          type="button">
                                                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                                              <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                                          </svg>
                                                          <span class="sr-only">Comment settings</span>
                                                      </button>
                                                      <!-- Dropdown menu -->
                                                      <div id="dropdownComment2"
                                                          class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                          <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                              aria-labelledby="dropdownMenuIconHorizontalButton">
                                                              <li>
                                                                  <a href="#"
                                                                      class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                              </li>
                                                              <li>
                                                                  <a href="#"
                                                                      class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                                              </li>
                                                              <li>
                                                                  <a href="#"
                                                                      class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </footer>
                                                  <p class="text-gray-500 dark:text-gray-400">Much appreciated! Glad you liked it ☺️</p>
                                                  <div class="flex items-center mt-4 space-x-4">
                                                      <button type="button"
                                                          class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                                          <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                                          </svg>                
                                                          Reply
                                                      </button>
                                                  </div>
                                              </article> --}}
                                              {{-- <article class="p-6 mb-3 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                  <footer class="flex justify-between items-center mb-2">
                                                      <div class="flex items-center">
                                                          <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                                                                  class="mr-2 w-6 h-6 rounded-full"
                                                                  src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                                                  alt="Bonnie Green">Bonnie Green</p>
                                                          <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-03-12"
                                                                  title="March 12th, 2022">Mar. 12, 2022</time></p>
                                                      </div>
                                                      <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3"
                                                          class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-40 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                          type="button">
                                                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                                              <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                                          </svg>
                                                          <span class="sr-only">Comment settings</span>
                                                      </button>
                                                      <!-- Dropdown menu -->
                                                      <div id="dropdownComment3"
                                                          class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                          <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                              aria-labelledby="dropdownMenuIconHorizontalButton">
                                                              <li>
                                                                  <a href="#"
                                                                      class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                              </li>
                                                              <li>
                                                                  <a href="#"
                                                                      class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                                              </li>
                                                              <li>
                                                                  <a href="#"
                                                                      class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </footer>
                                                  <p class="text-gray-500 dark:text-gray-400">The article covers the essentials, challenges, myths and stages the UX designer should consider while creating the design strategy.</p>
                                                  <div class="flex items-center mt-4 space-x-4">
                                                      <button type="button"
                                                          class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                                          <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                                          </svg>
                                                          Reply
                                                      </button>
                                                  </div>
                                              </article> --}}
                                              @foreach ($stylist->comments as $comment)
                                              <article class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                <footer class="flex justify-between items-center mb-2">
                                                    <div class="flex items-center">
                                                        <p class="inline-flex items-center ml-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                                                                class="ml-2 w-6 h-6 rounded-full"
                                                                src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                                alt="{{ $comment->commentator->name }}">{{ $comment->commentator->name }}</p>
                                                        <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-06-23"
                                                                title="{{ jdate($comment->created_at)->format('%A، %d %B') }}">{{ jdate($comment->created_at)->format('%A، %d %B') }}</time></p>
                                                    </div>
                                                    <button id="dropdownComment4Button" data-dropdown-toggle="dropdownComment4"
                                                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-40 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                        type="button">
                                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                                        </svg>
                                                    </button>
                                                    <!-- Dropdown menu -->
                                                    {{-- <div id="dropdownComment4"
                                                        class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                            aria-labelledby="dropdownMenuIconHorizontalButton">
                                                            <li>
                                                                <a href="#"
                                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                            </li>
                                                        </ul>
                                                    </div> --}}
                                                </footer>
                                                {{-- <p class="text-gray-500 dark:text-gray-400">
                                                    Thanks for sharing this. I do came from the Backend development and explored some of the tools to design my Side Projects.</p>
                                                     --}}
                                                     <p>{{ $comment->comment }}</p>
                                                {{-- <div class="flex items-center mt-4 space-x-4">
                                                    <button type="button"
                                                        class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                                        <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                                        </svg>
                                                        Reply
                                                    </button>
                                                </div> --}}
                                            </article>
                                              @endforeach
                                            </div>
                                          </section>
                                    </div>

                                    <div class="hidden bg-white shadow rounded-lg p-6" id="education" role="tabpanel" aria-labelledby="education-tab">
                                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">comments tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                                    </div>
                                    
                                    <div class="hidden bg-white shadow rounded-lg p-6" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">

                                    <h2 class="text-xl font-bold mt-6 mb-4">رزرو وقت</h2>


                                    @if ($availableTimeSlots->isEmpty())
                                        <p>در حال حاضر زمان آزادی وجود ندارد.</p>
                                    @else
                                        <ul class="space-y-4">
                                            @foreach ($availableTimeSlots as $slot)
                                                <li
                                                    class="bg-gray-100 p-4 rounded shadow flex justify-between items-center">
                                                    <div>
                                                        <span
                                                            class="font-bold">{{ jdate($slot->start_time)->format('%A، %d %B') }}</span>
                                                        <span>از <span
                                                                class="font-bold">{{ jdate($slot->start_time)->format('H:m') }}</span>
                                                            تا <span
                                                                class="font-bold">{{ jdate($slot->end_time)->format('H:m') }}</span>
                                                        </span>
                                                    </div>
                                                    @auth
                                                        <form method="POST"
                                                            action="{{ route('stylists.reserve', $stylist) }}">
                                                            @csrf
                                                            <input type="hidden" name="time_slot_id"
                                                                value="{{ $slot->id }}">
                                                            <button type="submit"
                                                                class="bg-blue-500 text-white px-4 py-2 rounded">رزرو</button>
                                                        </form>
                                                    @else
                                                        <span class="text-gray-500">برای رزرو وارد شوید</span>
                                                    @endauth
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-white shadow rounded-lg p-6">


                                    <hr>




                                    {{-- <div class="mb-6">
                                    <div class="flex justify-between flex-wrap gap-2 w-full">
                                        <span class="text-gray-700 font-bold">Web Developer</span>
                                        <p>
                                            <span class="text-gray-700 mr-2">at ABC Company</span>
                                            <span class="text-gray-700">2017 - 2019</span>
                                        </p>
                                    </div>
                                    <p class="mt-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae
                                        tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas
                                        suscipit.
                                    </p>
                                </div>
                                <div class="mb-6">
                                    <div class="flex justify-between flex-wrap gap-2 w-full">
                                        <span class="text-gray-700 font-bold">Web Developer</span>
                                        <p>
                                            <span class="text-gray-700 mr-2">at ABC Company</span>
                                            <span class="text-gray-700">2017 - 2019</span>
                                        </p>
                                    </div>
                                    <p class="mt-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae
                                        tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas
                                        suscipit.
                                    </p>
                                </div>
                                <div class="mb-6">
                                    <div class="flex justify-between flex-wrap gap-2 w-full">
                                        <span class="text-gray-700 font-bold">Web Developer</span>
                                        <p>
                                            <span class="text-gray-700 mr-2">at ABC Company</span>
                                            <span class="text-gray-700">2017 - 2019</span>
                                        </p>
                                    </div>
                                    <p class="mt-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae
                                        tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas
                                        suscipit.
                                    </p>
                                </div> --}}
                                </div>

                            </div>

                            <div class="col-span-4 sm:col-span-3">
                                <div class="bg-white shadow rounded-lg p-6">
                                    <div class="flex flex-col">
                                        <h2 class="text-xl font-bold mb-4 text-right">راه‌های تماس</h2>
                                        <div class="flex justify-center items-center gap-6 my-6">
                                            <a class="text-gray-700 hover:text-orange-600"
                                                aria-label="Visit TrendyMinds LinkedIn" href="" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="h-6">
                                                    <path fill="currentColor"
                                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="text-gray-700 hover:text-orange-600"
                                                aria-label="Visit TrendyMinds YouTube" href="" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                    class="h-6">
                                                    <path fill="currentColor"
                                                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="text-gray-700 hover:text-orange-600"
                                                aria-label="Visit TrendyMinds Facebook" href="" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                    class="h-6">
                                                    <path fill="currentColor"
                                                        d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="text-gray-700 hover:text-orange-600"
                                                aria-label="Visit TrendyMinds Instagram" href="" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="h-6">
                                                    <path fill="currentColor"
                                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a class="text-gray-700 hover:text-orange-600"
                                                aria-label="Visit TrendyMinds Twitter" href="" target="_blank">
                                                <svg class="h-6" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path fill="currentColor"
                                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
