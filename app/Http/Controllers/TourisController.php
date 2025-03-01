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
}

