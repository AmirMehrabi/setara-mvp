<?php

namespace App\Http\Controllers;

use App\Models\TimeSlot;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\Stylist;
use Illuminate\Http\Request;

class StylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stylist = Stylist::all();
        return view('modules.stylist.index', compact('stylist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Stylist $stylist)
    {
        $availableTimeSlots = TimeSlot::where('stylist_id', $stylist->id)
        ->where('status', 'available')
        ->get();

        // foreach ($stylist->comments as $key => $comment) {
        //     var_dump($comment);
        // }
        // return;
        // return $stylist->comments;
        return view('modules.stylist.show', compact('stylist', 'availableTimeSlots'));
    }


    public function reserve(Request $request, Stylist $stylist)
    {
        $request->validate([
            'time_slot_id' => 'required|exists:time_slots,id',
        ]);

    $timeSlot = TimeSlot::where('id', $request->time_slot_id)
                        ->where('stylist_id', $stylist->id)
                        ->where('status', 'available')
                        ->firstOrFail();

    // Create a reservation
    $reservation = Reservation::create([
        'user_id' => Auth::id(),
        'stylist_id' => $stylist->id,
        'time_slot_id' => $timeSlot->id,
        'status' => 'pending',
    ]);

    $timeSlot->update(['status' => 'reserved']);

        return redirect()->route('stylists.show', $stylist)->with('success', 'زمان مورد نظر با موفقیت رزرو شد');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stylist $stylist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stylist $stylist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stylist $stylist)
    {
        //
    }
}
