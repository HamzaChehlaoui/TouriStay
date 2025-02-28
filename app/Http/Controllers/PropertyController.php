<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function index(){
        $userId = auth()->id();
        $properties  = Property::where('user_id', $userId)->get();
        return view('properties.index', compact('properties'));
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
    public function destroy($id)
    {
            $property = Property::find($id);
            if ($property) {
                $property->delete();
                return redirect()->back()->with('success', 'The property has been successfully deleted.');
            }
            return redirect()->back()->with('error', 'The property is not available.');
    }

        public function edit($id)
        {
            $property = Property::findOrFail($id); // Find the property or show a 404 error
            return view('properties.edit', compact('property'));
        }

        public function update(Request $request, $id)
{
    $property = Property::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'base_price' => 'required|numeric|min:0',
        'city' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'bedrooms' => 'required|integer|min:0',
        'bathrooms' => 'required|integer|min:0',
        'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120' // Validate image
    ]);

    // Handle file upload if a new file is provided
    if ($request->hasFile('photos')) {
        // Delete the old photo if it exists
        if ($property->photos) {
            foreach ($property->photos as $oldPhoto) {
                Storage::disk('public')->delete($oldPhoto);
            }
        }

        // Store the new photo(s)
        $photos = [];
        foreach ($request->file('photos') as $photo) {
            $photos[] = $photo->store('property_photos', 'public');
        }
        $property->photos = $photos;
    }

    // Update the rest of the property details
    $property->update($request->except('photos'));

    return redirect()->route('properties.index')->with('success', 'Property updated successfully.');
}

        public function touris()
{
    $properties = Property::all();
    return view('touris.index', compact('properties'));
}

}
