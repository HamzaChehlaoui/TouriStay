<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'type', 'bedrooms', 'bathrooms', 'max_guests',
        'address', 'city', 'country', 'base_price', 'cleaning_fee', 'description','photos','user_id'
    ];
    protected $casts = [
        'photos' => 'array',
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}

    public function usersWhoFavorited()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
