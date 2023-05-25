<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\places;

class updatePlaceController extends Controller
{
    public function index($id){
        $data = places::where('id',$id)->first();
        return view('update' , compact('data'));
    }

    public function updatePlace(Request $request , places $places){
        $data = $request->validate([
            'title' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'description' => 'required|string',
        ]);

        
        $places->fill($data)->save();

        return redirect('/admin');
    }
}
