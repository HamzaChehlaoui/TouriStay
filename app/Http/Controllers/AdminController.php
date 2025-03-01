<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
class AdminController extends Controller
{
    public function index(){
        $properties = Property::all();


        $nomberUser = User::whereIn('user_type',['tourist','propriétaire'])->count();
        $nomberLocations= Property::count();
        $nomberActiveAds =Property::where('status','Active')->count();
        return view('admin.dashbord',compact(['properties','nomberUser','nomberLocations','nomberActiveAds']));
    }

}
