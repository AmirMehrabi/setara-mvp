<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function stylist()
    {
        return $this->belongsTo(Stylist::class);
    }

    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }
}
