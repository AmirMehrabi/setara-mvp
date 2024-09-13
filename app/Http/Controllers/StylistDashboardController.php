<?php

namespace App\Http\Controllers;

use App\Models\TimeSlot;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Morilog\Jalali\Jalalian;

class StylistDashboardController extends Controller
{
    public function index()
    {
        $stylist = Auth::guard('stylist')->user();

        // Get all reserved time slots
        $reservedTimeSlots = TimeSlot::where('stylist_id', $stylist->id)
                                     ->where('status', 'booked')
                                     ->with('reservation.user')
                                     ->get();

        $availableTimeSlots = TimeSlot::where('stylist_id', $stylist->id)
        ->where('status', 'available')
        ->get();

        // Get upcoming reservations
        $upcomingReservations = Reservation::where('stylist_id', $stylist->id)
                                           ->where('status', 'confirmed')
                                           ->where('time_slot_id', '>', now())
                                           ->with('timeSlot', 'user')
                                           ->get();

        return view('stylist.dashboard', compact('reservedTimeSlots', 'upcomingReservations', 'availableTimeSlots'));
    }



    public function storeAvailableTimeSlots(Request $request)
    {


        // return $request->all();
        $request->validate([
            'time_slots' => 'required|array',
            'time_slots.*.start_time' => 'required',
        'time_slots.*.end_time' => 'required|after:time_slots.*.start_time',
        ]);

        // return $request->all();


        $stylist = Auth::guard('stylist')->user();

        foreach ($request->time_slots as $slot) {
            // return new Jalalian($slot['start_time']) ;
            // return \Morilog\Jalali\Jalalian::fromFormat('Y/m/d H:i:s', $slot['start_time'])->toCarbon();
            TimeSlot::create([
                'stylist_id' => $stylist->id,
                'start_time' => \Morilog\Jalali\Jalalian::fromFormat('Y/m/d H:i:s', $slot['start_time'])->toCarbon(),
                'end_time' => \Morilog\Jalali\Jalalian::fromFormat('Y/m/d H:i:s', $slot['end_time'])->toCarbon(),
                'status' => 'available',
            ]);
        }

        return redirect()->back()->with('success', 'زمان آزاد با موفقیت افزوده شد');
    }
}
