@extends('layouts.main')

@section('title', 'نمایه‌ی کاربری')


@section('content')

<link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
<script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>

    <div class="max-w-4xl flex items-center flex-wrap mx-auto my-32 lg:my-0">

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 w-full w-100 mt-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded-lg mb-4 mt-4 w-full">
        <div class="bg-gray-200 px-4 py-2 rounded-t-lg font-semibold">زمان‌های رزرو شده</div>
        <div class="p-4">
            @if($reservedTimeSlots->isEmpty())
                <p>در حال حاضر جلسه‌ای رزرو نشده</p>
            @else
                <ul class="list-disc pl-5">
                    @foreach($reservedTimeSlots as $slot)
                        <li class="mb-2">
                            {{ $slot->start_time }} - {{ $slot->end_time }} 
                            (Reserved by: {{ $slot->reservation->user->name }})
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <div class="bg-white shadow rounded-lg mb-4 w-full">
        <div class="bg-gray-200 px-4 py-2 rounded-t-lg font-semibold">رزروهای آتی</div>
        <div class="p-4">
            @if($upcomingReservations->isEmpty())
                <p>در حال حاضر جلسه‌ای رزرو نشده.</p>
            @else
                <ul class="list-disc pl-5">
                    @foreach($upcomingReservations as $reservation)
                        <li class="mb-2">
                            {{ $reservation->timeSlot->start_time }} - {{ $reservation->timeSlot->end_time }}
                            (Reserved by: {{ $reservation->user->name }})
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <div class="bg-white shadow rounded-lg mb-4 w-full">
        <div class="bg-gray-200 px-4 py-2 rounded-t-lg font-semibold">زمان‌های آزاد</div>
        <div class="p-4">
            @if($availableTimeSlots->isEmpty())
                <p>در حال حاضر زمان آزادی وجود ندارد.</p>
            @else
                <ul class="list-disc pl-5">
                    @foreach($availableTimeSlots as $slot)
                        <li class="mb-2">
                            <div>
                                <span
                                    class="font-bold">{{ jdate($slot->start_time)->format('%A، %d %B') }}</span>
                                <span>از <span
                                        class="font-bold">{{ jdate($slot->start_time)->format('H:m') }}</span>
                                    تا <span
                                        class="font-bold">{{ jdate($slot->end_time)->format('H:m') }}</span>
                                </span>
                            </div>
                            {{-- <span>از <span class="font-bold">{{ jdate($slot->start_time) }}</span> تا <span class="font-bold">{{ jdate($slot->end_time) }}</span> </span> --}}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <div class="bg-white shadow rounded-lg mb-4 w-full">
        <div class="bg-gray-200 px-4 py-2 rounded-t-lg font-semibold">افزودن زمان آزاد برای جلسه</div>
        <div class="p-4">
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('stylist.storeAvailableTimeSlots') }}">
                @csrf
                <div class="flex flex-wrap  timeslot-selector">
                    <div class="w-1/2">
                        <label for="start_time" class="block text-gray-700">زمان شروع </label>
                        <input data-jdp name="time_slots[0][start_time]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                    </div>
                    <div class="w-1/2 mt-0">
                        <label for="end_time" class="block text-gray-700">زمان پایان</label>
                        <input data-jdp name="time_slots[0][end_time]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                    </div>
                </div>
                <div class="text-left">
                    <button type="button" id="add-timeslot" class="mt-3 bg-gray-500 text-white py-2 px-4 rounded">افزودن زمان‌های بیشتر</button>
                    <button type="submit" class="mt-3 bg-blue-500 text-white py-2 px-4 rounded">ذخیره‌سازی</button>
                </div>
            </form>
        </div>
    </div>

    </div>




    <script>

document.addEventListener('DOMContentLoaded', function() {
    console.log( "ready!" );
    jalaliDatepicker.startWatch(
        {time: true}
    );
}, false);


        
        document.getElementById('add-timeslot').addEventListener('click', function () {
            let timeslotSelector = document.querySelector('.timeslot-selector');
            let index = timeslotSelector.children.length / 2;
    
            let startTimeInput = document.createElement('div');
            startTimeInput.classList.add('w-1/2');
            startTimeInput.innerHTML = `<label for="start_time" class="block text-gray-700">زمان شروع</label>
                                        <input type="datetime-local" name="time_slots[${index}][start_time]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>`;
            timeslotSelector.appendChild(startTimeInput);
    
            let endTimeInput = document.createElement('div');
            endTimeInput.classList.add('w-1/2');
            endTimeInput.innerHTML = `<label for="end_time" class="block text-gray-700">زمان پایان</label>
                                      <input type="datetime-local" name="time_slots[${index}][end_time]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>`;
            timeslotSelector.appendChild(endTimeInput);
        });
    </script>

@endsection


