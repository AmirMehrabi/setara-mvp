<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BeyondCode\Comments\Traits\HasComments;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Stylist extends Authenticatable
{
    use HasFactory;
    use HasComments;

    protected $guarded = [];


    public function timeSlots()
    {
        return $this->hasMany(TimeSlot::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
