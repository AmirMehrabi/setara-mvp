<!DOCTYPE html>
<html>
<head>
    <title>Stylist Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .timeslot-selector {
            display: flex;
            flex-wrap: wrap;
        }
        .timeslot-selector input {
            margin-right: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>Welcome, {{ Auth::guard('stylist')->user()->name }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card mb-4">
        <div class="card-header">Reserved Time Slots</div>
        <div class="card-body">
            @if($reservedTimeSlots->isEmpty())
                <p>No reserved time slots.</p>
            @else
                <ul class="list-group">
                    @foreach($reservedTimeSlots as $slot)
                        <li class="list-group-item">
                            {{ $slot->start_time }} - {{ $slot->end_time }} 
                            (Reserved by: {{ $slot->reservation->user->name }})
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Upcoming Reservations</div>
        <div class="card-body">
            @if($upcomingReservations->isEmpty())
                <p>No upcoming reservations.</p>
            @else
                <ul class="list-group">
                    @foreach($upcomingReservations as $reservation)
                        <li class="list-group-item">
                            {{ $reservation->timeSlot->start_time }} - {{ $reservation->timeSlot->end_time }}
                            (Reserved by: {{ $reservation->user->name }})
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>


    <div class="card mb-4">
        <div class="card-header">Available Time Slots</div>
        <div class="card-body">
            @if($availableTimeSlots->isEmpty())
                <p>No available time slots.</p>
            @else
                <ul class="list-group">
                    @foreach($availableTimeSlots as $slot)
                        <li class="list-group-item">
                            <span>از <span class="font-bold">{{ jdate($slot->start_time) }}</span> تا <span class="font-bold">{{ jdate($slot->end_time) }}</span> </span>

                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Select Available Time Slots</div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('stylist.storeAvailableTimeSlots') }}">
                @csrf
                <div class="timeslot-selector">
                    <div>
                        <label for="start_time">Start Time</label>
                        <input type="datetime-local" name="time_slots[0][start_time]" class="form-control" required>
                    </div>
                    <div>
                        <label for="end_time">End Time</label>
                        <input type="datetime-local" name="time_slots[0][end_time]" class="form-control" required>
                    </div>
                </div>
                <button type="button" id="add-timeslot" class="btn btn-secondary mt-3">Add More Time Slots</button>
                <button type="submit" class="btn btn-primary mt-3">Save Time Slots</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('add-timeslot').addEventListener('click', function () {
        let timeslotSelector = document.querySelector('.timeslot-selector');
        let index = timeslotSelector.children.length / 2;

        let startTimeInput = document.createElement('div');
        startTimeInput.innerHTML = `<label for="start_time">Start Time</label>
                                    <input type="datetime-local" name="time_slots[${index}][start_time]" class="form-control" required>`;
        timeslotSelector.appendChild(startTimeInput);

        let endTimeInput = document.createElement('div');
        endTimeInput.innerHTML = `<label for="end_time">End Time</label>
                                  <input type="datetime-local" name="time_slots[${index}][end_time]" class="form-control" required>`;
        timeslotSelector.appendChild(endTimeInput);
    });
</script>
</body>
</html>