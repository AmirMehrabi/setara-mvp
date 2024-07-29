
@extends('layouts.main')

@section('content')

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">به ستارا خوش آمدید</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form method="POST" class="space-y-6" action="{{ route('stylist.login') }}">
            @csrf
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">آدرس ایمیل</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong class="mt-1 text-red-700">{{ $message }}</strong>
                    </span>
                @enderror  
        </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">کلمه عبور</label>

            {{-- <div class="text-sm">
              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
            </div> --}}
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong class="mt-1 text-red-700">{{ $message }}</strong>
                    </span>
                @enderror
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">ورود</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
        عضو نیستید؟
        <a href="#" class="font-semibold leading-6 text-sunglow-600 hover:text-sunglow-500">این فرم را پر کنید</a>
      </p>
    </div>
  </div>
  
@endsection
