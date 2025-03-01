<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use App\Models\Property;
use App\Models\User;

class FavoriteController extends Controller
{

    public function index()
{
    $favoriteIds = Favorite::where('user_id', auth()->id())->pluck('property_id');

    $favorites = Property::whereIn('id', $favoriteIds)->get();

    return view('favorites.index', compact('favorites'));
}


    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error','login');
        }

        $user = Auth::user();
        $propertyId = $request->input('property_id');

        $property = Property::findOrFail($propertyId);

        $existingFavorite = Favorite::where('user_id', $user->id)
                                    ->where('property_id', $propertyId)
                                    ->first();

        if ($existingFavorite) {
            return redirect()->back()->with('info');
        }

        Favorite::create([
            'user_id' => $user->id,
            'property_id' => $propertyId
        ]);

        return redirect()->back()->with('success');
    }

    public function destroy($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error');
        }

        $favorite = Favorite::where('user_id', Auth::id())->where('property_id', $id)->first();

        if ($favorite) {
            $favorite->delete();
            return redirect()->back()->with('success');
        }

        return redirect()->back()->with('error');
    }





}


