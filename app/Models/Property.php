<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'type', 'bedrooms', 'bathrooms', 'max_guests',
        'address', 'city', 'country', 'base_price', 'cleaning_fee', 'description','photos','user_id','status','available_from','available_to'
    ];
    protected $casts = [
        'photos' => 'array',
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}

public function favoritedByUsers()
{
    return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
}




}
