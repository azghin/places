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

    public function deletePlace($id){
        $item = places::find($id);

        // Check if the row exists
        if ($item) {
            // Delete the row
            $item->delete();
    
            return redirect()->back()->with('success', 'Row deleted successfully.');
        }
    
        return redirect()->back()->with('error', 'Row not found.');
    }
}
