@extends('layouts.main')

@section('title', 'تائید هویت')

@section('content')


<section class="bg-white">
    <div class="flex content-center items-center flex-wrap h-screen">
        <div class="w-full sm:w-1/2 lg:w-1/3 p-2 mx-auto">
            <div class="w-full max-w-sm mx-auto">
                <form autocomplete="off" action="{!! route('postAuthenticate') !!}" method="POST" class="bg-white shadow-2xl px-8 pt-6 pb-8 mb-4 border-t-4 border-purple-400">
                    {{csrf_field()}}
                    <img src="{{asset('images/character.jpg')}}" class="w-3/4 mx-auto pb-6" alt="">
                    <div class="text-center mb-4">
                        <p class="text-lg">تائیدیه</p>
                        <p class="text-xs text-gray-500">کد تائید پیامک شده به تلفن همراهتان را وارد کنید</p>
                    </div>
                    @if (session()->has('error'))
                        <div class="bg-red-100 mb-4 border border-red-400 irsans text-xs text-red-700 px-3 py-2 rounded relative" role="alert">
                            <strong class="font-bold">متاًسفیم</strong>
                            <span class="block sm:inline">کد وارد شده اشتباه است.</span>
                        </div>                        
                    @endif


                    <div class="mb-4">
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4
                                text-gray-700 leading-tight text-xl irsans focus:outline-none focus:bg-white focus:border-purple-500"
                            id="phoneInput" name="token" type="text" placeholder="مثال: 27394">
                    </div>


                    <div class="flex items-center justify-between">
                        <button
                            class="bg-purple-500 mr-auto w-full text-xl irsans text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:bg-purple-600 hover:text-white"
                            type="submit">
                            تائید
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection