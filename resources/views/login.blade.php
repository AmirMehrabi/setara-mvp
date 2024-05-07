@extends('layouts.main')

@section('title', 'ورود')


@section('content')

<style>
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>


<section class="bg-white">
    <div class="flex content-center items-center flex-wrap h-screen">
        <div class="w-full sm:w-1/2 lg:w-1/3 p-2 mx-auto">
            <div class="w-full max-w-sm mx-auto">
                <form method="POST" class="bg-white shadow-2xl px-8 pt-6 pb-8 mb-4 border-t-4 border-purple-400">
                    {{csrf_field()}}
                    <img src="{{asset('images/character.jpg')}}" class="w-3/4 mx-auto pb-6" alt="">
                    <div class="text-center mb-4">
                        <p class="text-lg">بیایید شروع کنیم</p>
                        <p class="text-xs text-gray-500">شماره تلفن شما را با هیچکس به اشتراک نمی‌گذاریم.</p>
                    </div>
                    @foreach ($errors->all() as $error)
                    <div class="bg-red-100 mb-4 border border-red-400 irsans text-xs text-red-700 px-3 py-2 rounded relative" role="alert">
                        <strong class="font-bold">متاًسفیم</strong>
                        <span class="block sm:inline">{{$error}}</span>
                    </div>  
                  
                  @endforeach

                    

                    <div class="mb-4">
                        <input
                            class="bg-gray-200 text-xl appearance-none border-2 border-gray-200 rounded w-full py-2 px-4
                                text-gray-700 leading-tight irsans focus:outline-none focus:bg-white focus:border-purple-500"
                            id="phoneInput" name="phone" type="number" placeholder="09131951313">
                    </div>


                    <div class="flex items-center justify-between">
                        <button
                            class="bg-purple-500 mr-auto w-full  irsans text-white font-bold py-2 px-4 rounded text-xl focus:outline-none focus:shadow-outline hover:bg-purple-600 hover:text-white"
                            type="submit">
                            ورود
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection