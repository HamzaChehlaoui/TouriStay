<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class TourisController extends Controller
{
    public function index(){

        $properties = Property::all();
        return view('touris.index', compact('properties'));
    }

    public function Pagination(Request $request){

        $perPage = $request->input('per_page', 4);

        // Fetch paginated data
        $properties = Property::paginate($perPage);

        return view('touris.index', compact('properties'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return redirect()->route('touris.index')->with('error', 'Veuillez entrer un terme de recherche.');
        }

        $properties = Property::where('name', 'LIKE', "%{$query}%")
            ->orWhere('city', 'LIKE', "%{$query}%")
            ->orWhere('available_from', 'LIKE', "%{$query}%")
            ->orWhere('available_to', 'LIKE', "%{$query}%")
            ->paginate(4);

        $properties->appends(['query' => $query]);

        return view('/touris.index', compact('properties'));

    }


}

