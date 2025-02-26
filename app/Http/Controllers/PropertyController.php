<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|numeric|min:0',
            'max_guests' => 'required|integer|min:1',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'base_price' => 'required|numeric|min:0',
            'cleaning_fee' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        Property::create($validatedData);

        return redirect()->back()->with('success', 'Property added successfully!');
    }
}
