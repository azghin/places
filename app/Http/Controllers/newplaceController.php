<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\places;
use Illuminate\Support\Facades\Storage;

class newplaceController extends Controller
{
    public function addForm (){
        return view('newplace');
    }

    // public function addNew (Request $request){
    //     $data = $request->validate([
    //         'title' => 'required|string',
    //         'latitude' => 'required|numeric',
    //         'longitude' => 'required|numeric',
    //         'description' => 'required|string',
    //         'logo' => 'required|logo|max:2048',
    //     ]);

    //     $imagePath = $request->file('logo')->store('img', 'public');

    //     $newdata = new Data();
    //     $newdata->title = $request->input('title');
    //     $newdata->latitude = $request->input('latitude');
    //     $newdata->longitude = $request->input('longitude');
    //     $newdata->description = $request->input('description');
    //     $newdata->logo = $imagePath;
    //     $newdata->save();

    //     return redirect()->back()->with('success', 'Data saved successfully.');
    // }

    public function addNew (Request $request){
        $data = $request->validate([
            'title' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);
        $imagePath = $request->file('image')->store('img','public');
        $data['image']=$imagePath;
        places::create($data);
        return redirect()->back()->with('succes','place stored successfully.');
    }
}
