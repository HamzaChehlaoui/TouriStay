<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class AdminController extends Controller
{
    public function index(){
        $properties = Property::all();
        
        return view('admin.dashbord',compact('properties'));
    }
}
