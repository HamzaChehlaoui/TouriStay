<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index(){
        $properties  = Property::all();
    
        return view('proprietaire.index', compact('properties'));
    }
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add a property.');
        }
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
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);
        $photos = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('property_photos', 'public');
                $photos[] = $path;
            }
        }

        $validatedData['photos'] = $photos;
        $validatedData['user_id'] = auth()->id();
        if (!$validatedData['user_id']) {
            return redirect()->back()->with('error', 'User ID is missing.');
        }

        Property::create($validatedData);

        return redirect()->back()->with('success', 'Property added successfully!');
    }

}
