<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\places;

class PlacesController extends Controller
{
    public function placeList(){
        $data = places::all();

        return view('places',compact('data'));
    }
}
