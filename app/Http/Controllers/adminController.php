<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\places;
use App\Models\User;



class adminController extends Controller
{
    public function index(){
        $count = places::count();
        $countU = User::count();
        // $countA = User::count()->where();
        return view('admin.dashboard',compact('count','countU'));
    }
    public function list(){
        $data =places::all();
        return view('admin.places',compact('data'));
    }
    public function create(){
        return view('admin.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'Title' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);
        $imagePath = $request->file('image')->store('img','public');
        $data['image']=$imagePath;
        places::create($data);
        return redirect('admin/places');
    }
    public function edit($id){
        $data = places::where('id',$id)->first();
        return view('admin.edit',compact('data'));
    }
    public function update(Request $request, $id){
        // Validate the form data
        $validatedData = $request->validate([
            'Title' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'description' => 'required',
            'image' => 'image' // Example validation for image file
        ]);

        // Find the record you want to update
        $record = places::find($id); // Replace YourModel with the actual model used for the form data

        // Update the record with the new values
        $record->Title = $request->input('Title');
        $record->latitude = $request->input('latitude');
        $record->longitude = $request->input('longitude');
        $record->description = $request->input('description');

        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public'); // Store the image in the public/images directory
            $record->image = $imagePath;
        }

        // Save the updated record
        $record->save();

        // Redirect back to the form or any other desired location
        return redirect('admin/places');
    }
    public function destroy($id){
        $item = places::find($id);

        // Check if the row exists
        if ($item) {
            // Delete the row
            $item->delete();
    
            return redirect()->back()->with('success', 'Row deleted successfully.');
        }
    
        return redirect()->back()->with('error', 'Row not found.');
    }
    public function profile(){
        // $user = auth::user();
        return view('admin.profile')->with('user',auth()->user());
    }   
}
