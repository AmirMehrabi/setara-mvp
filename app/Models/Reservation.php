<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stylist;
use App\Models\User;
use App\Models\TimeSlot;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'stylist_id',
        'time_slot_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stylist()
    {
        return $this->belongsTo(Stylist::class);
    }

    public function timeSlot()
    {
        return $this->belongsTo(TimeSlot::class);
    }
}
