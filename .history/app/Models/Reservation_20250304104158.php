<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',         // أضف هذا السطر
        'property_id',
        'checkin',
        'checkout',
        'total_nights',
        'estimated_total',
    ];
}
